<?php

namespace PrestaShopClient\Model;

/**
 * Class SearchModel
 * @package PrestaShopClient\Model
 */
class SearchModel
{
    /**
     * @var string
     */
    private $resource;

    /**
     * @var boolean
     */
    private $date;

    /**
     * @var string
     */
    private $display;

    /**
     * @var array
     */
    private $filter = [];

    /**
     * @var string;
     */
    private $limit;

    /**
     * @var string
     */
    private $sort;

    /**
     * @var bool
     */
    private $json = true;

    /**
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @param string $resource
     * @return SearchModel
     */
    public function setResource($resource)
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param string $display
     * @return SearchModel
     */
    public function setDisplay($display)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * @return array
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @param array $filter
     * @return SearchModel
     */
    public function setFilter($filter)
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * @param string $key
     * @param string $value
     * @return SearchModel
     */
    public function addFilter($key, $value)
    {
        $this->filter[$key] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDate()
    {
        return $this->date;
    }

    /**
     * @param bool $date
     * @return SearchModel
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getLimit()
    {
        return $this->limit;
    }

    /**
     * @param string $limit
     * @return SearchModel
     */
    public function setLimit($limit)
    {
        $this->limit = $limit;
        return $this;
    }

    /**
     * @return string
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param string $sort
     * @return SearchModel
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * @return bool
     */
    public function isJson()
    {
        return $this->json;
    }

    /**
     * @param bool $json
     * @return SearchModel
     */
    public function setJson($json)
    {
        $this->json = $json;
        return $this;
    }

    /**
     * @return string
     */
    public function getParams()
    {
        $params = [];

        if ($this->date) {
            $params['date'] = 1;
        }

        if ($this->display) {
            $params['display'] = $this->display;
        }

        if ($this->filter) {
            foreach ($this->filter as $key => $item) {
                $params['filter[' . $key . ']'] = $item;
            }
        }

        if ($this->sort) {
            $params['sort'] = $this->sort;
        }

        if ($this->limit) {
            $params['limit'] = $this->limit;
        }

        if ($this->json) {
            $params['output_format'] = 'JSON';
        }

        return $this->resource . '?' . http_build_query($params);
    }

}