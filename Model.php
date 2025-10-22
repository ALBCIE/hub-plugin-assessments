<?php

// Import additionnal class into the global namespace
use \LaswitchTech\Core\Base\BaseModel;

class AssessmentsModel extends BaseModel {

    /**
     * Constructor
     */
    public function __construct()
    {
        // Call the parent constructor
        parent::__construct();

        // Initialize the Model
        $this->init('assessments');
    }

    /**
     * Apply Joins to the Query
     *
     * @param Query $Query
     * @return Query
     */
    protected function joins(object $Query): object
    {
        // Apply Joins
        $Query->join('task', 'tasks', 'id')
            ->join('service', 'services', 'id')
            ->join('importer', 'importers', 'id');

        return $Query;
    }
}
