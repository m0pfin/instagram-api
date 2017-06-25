<?php

namespace NicklasW\Instagram\DTO\Messages\Discover;

use NicklasW\Instagram\DTO\Envelope;
use NicklasW\Instagram\Responses\Serializers\Traits\OnPropagateDecodeEventTrait;
use Traits\MappableTrait;

class ExploreMessage extends Envelope
{

    use MappableTrait;
    use OnPropagateDecodeEventTrait;

    /**
     * @var int
     * @name num_results
     */
    protected $numResults;

    /**
     * @var bool
     * @name auto_load_more_enabled
     */
    protected $autoLoadMoreEnabled;

    /**
     * @var
     */
    protected $items;

    /**
     * @var bool
     * @name more_available
     */
    protected $moreAvailable;

    /**
     * @var string
     * @name next_max_id
     */
    protected $nextMaxId;

    /**
     * @var string
     * @name max_Id
     */
    protected $maxId;

    /**
     * @var string
     * @name rank_token
     */
    protected $rankToken;

    /**
     * @return mixed
     */
    public function getNumResults()
    {
        return $this->numResults;
    }

    /**
     * @return mixed
     */
    public function getAutoLoadMoreEnabled()
    {
        return $this->autoLoadMoreEnabled;
    }

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @return mixed
     */
    public function getMoreAvailable()
    {
        return $this->moreAvailable;
    }

    /**
     * @return mixed
     */
    public function getNextMaxId()
    {
        return $this->nextMaxId;
    }

    /**
     * @return mixed
     */
    public function getMaxId()
    {
        return $this->maxId;
    }

    /**
     * @return mixed
     */
    public function getRankToken()
    {
        return $this->rankToken;
    }

}