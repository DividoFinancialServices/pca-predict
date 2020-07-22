<?php

namespace Divido\PCAPredict;

/**
 * Class FinderResult
 *
 * @author Neil McGibbon <neil.mcgibbon@divido.com>
 * @copyright (c) 2017, Divido
 * @package DividoFinancialServices\PCAPredict
 */
class FinderResult
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $text;

    /**
     * @var string
     */
    protected $highlight;

    /**
     * @var string
     */
    protected $description;

    /**
     * FinderResult constructor.
     */
    public function __construct()
    {
        ;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return FinderResult
     */
    public function setId(string $id): FinderResult
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return FinderResult
     */
    public function setType(string $type): FinderResult
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return $this->text;
    }

    /**
     * @param string $text
     * @return FinderResult
     */
    public function setText(string $text): FinderResult
    {
        $this->text = $text;
        return $this;
    }

    /**
     * @return string
     */
    public function getHighlight(): string
    {
        return $this->highlight;
    }

    /**
     * @param string $highlight
     * @return FinderResult
     */
    public function setHighlight(string $highlight): FinderResult
    {
        $this->highlight = $highlight;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return FinderResult
     */
    public function setDescription(string $description): FinderResult
    {
        $this->description = $description;
        return $this;
    }


}