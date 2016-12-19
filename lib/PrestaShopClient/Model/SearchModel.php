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
     * @return string
     */
    public function getResource(): string
    {
        return $this->resource;
    }

    /**
     * @param string $resource
     * @return SearchModel
     */
    public function setResource(string $resource): SearchModel
    {
        $this->resource = $resource;
        return $this;
    }

    /**
     * @return string
     */
    public function getDisplay(): string
    {
        return $this->display;
    }

    /**
     * @param string $display
     * @return SearchModel
     */
    public function setDisplay(string $display): SearchModel
    {
        $this->display = $display;
        return $this;
    }

    /**
     * @return array
     */
    public function getFilter(): array
    {
        return $this->filter;
    }

    /**
     * @param array $filter
     * @return SearchModel
     */
    public function setFilter(array $filter): SearchModel
    {
        $this->filter = $filter;
        return $this;
    }

    /**
     * @param string $key
     * @param string $value
     * @return SearchModel
     */
    public function addFilter(string $key, $value): SearchModel
    {
        $this->filter[$key] = $value;
        return $this;
    }

    /**
     * @return bool
     */
    public function isDate(): bool
    {
        return $this->date;
    }

    /**
     * @param bool $date
     * @return SearchModel
     */
    public function setDate(bool $date): SearchModel
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getParams(): string
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

        return $this->resource . '?' . http_build_query($params);
    }

}