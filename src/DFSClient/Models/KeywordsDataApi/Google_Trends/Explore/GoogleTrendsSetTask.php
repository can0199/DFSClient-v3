<?php


namespace DFSClientV3\Models\KeywordsDataApi\Google_Trends\Explore;


use DFSClientV3\Models\AbstractModel;

class GoogleTrendsSetTask extends AbstractModel
{
    protected $method = 'POST';
    protected $isSupportedMerge = true;
    protected $pathToMainData = 'tasks->{$postID}->result';
    protected $requestToFunction = 'keywords_data/google_trends/explore/task_post';
    protected $resultShouldBeTransformedToArray = true;

    /**
     * @return \DFSClientV3\Entity\Custom\GoogleTrendsSetTaskEntityMain
     */
    public function get(): \DFSClientV3\Entity\Custom\GoogleTrendsSetTaskEntityMain
    {
        return parent::get();
    }

    /**
     * @param array $keywords
     * @return $this
     */
    public function setKeywords(array $keywords)
    {
        $this->payload['keywords'] = $keywords;

        return $this;
    }

    /**
     * @param string $locationName
     * @return $this
     */
    public function setLocationName(string $locationName)
    {
        $this->payload['location_name'] = $locationName;

        return $this;
    }

    /**
     * @param int $locationCode
     * @return $this
     */
    public function setLocationCode(int $locationCode)
    {
        $this->payload['location_code'] = $locationCode;
        return $this;
    }

    /**
     * @param string $languageName
     * @return $this
     */
    public function setLanguageName(string $languageName)
    {
        $this->payload['language_name'] = $languageName;
        return $this;
    }

    /**
     * @param string $langCode
     * @return $this
     */
    public function setLanguageCode(string $langCode)
    {
        $this->payload['language_code'] = $langCode;

        return $this;
    }

    /**
     * @param string $type
     * @return $this
     */
    public function setType(string $type)
    {
        $this->payload['type'] = $type;

        return $this;
    }

    /**
     * @param int $categoryCode
     * @return $this
     */
    public function setCategoryCode(int $categoryCode)
    {
        $this->payload['category_code'] = $categoryCode;

        return $this;
    }

    /**
     * @param string $dateFrom
     * @return $this
     */
    public function setDateFrom(string $dateFrom)
    {
        $this->payload['date_from'] = $dateFrom;

        return $this;
    }

    /**
     * @param string $dateTo
     * @return $this
     */
    public function setDateTo(string $dateTo)
    {
        $this->payload['date_to'] = $dateTo;

        return $this;
    }

    /**
     * @param string $tag
     * @return $this
     */
    public function setTag(string $tag)
    {
        $this->payload['tag'] = $tag;
        return $this;
    }

    /**
     * @param string $postbackUrl
     * @return $this
     */
    public function setPostbackUrl(string $postbackUrl)
    {
        $this->payload['postback_url'] = $postbackUrl;
        return $this;
    }

    /**
     * @param string $pingbackUrl
     * @return $this
     */
    public function setPingbackUrl(string $pingbackUrl)
    {
        $this->payload['pingback_url'] = $pingbackUrl;
        return $this;
    }

    /**
     * @param array $modelPool
     * @return array
     * @throws \Exception
     */
    public static function getAfterMerge(array $modelPool)
    {
        return parent::getAfterMerge($modelPool); // TODO: Change the autogenerated stub
    }
}