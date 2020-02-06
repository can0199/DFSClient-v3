<?php


namespace DFSClientV3\Models\KeywordsDataApi\Keywords_For_Keywords;


use DFSClientV3\Models\AbstractModel;

class KeywordsForKeywordsGetResultsByIdModel extends AbstractModel
{
	protected $method = 'GET';
	protected $isSupportedMerge = false;
	protected $pathToMainData = 'tasks->{$postID}->result';
	protected $requestToFunction = 'keywords_data/google/keywords_for_keywords/task_get/{$taskUUID}';
	protected $resultShouldBeTransformedToArray = true;
	
	public function setTaskId(string $taskUUID)
	{
		$this->requestToFunction = str_replace('{$taskUUID}', $taskUUID, $this->requestToFunction);
		return $this;
	}
	
	/**
	 * @return \DFSClientV3\Entity\Custom\KeywordsForKeywordsGetResultsByIdEntityMain
	 */
	public function get(): \DFSClientV3\Entity\Custom\KeywordsForKeywordsGetResultsByIdEntityMain
	{
		return parent::get();
	}
}