<?php


/**
 * Base class that represents a query for the 'TASK' table.
 *
 * 
 *
 * @method     TaskQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     TaskQuery orderByTasUid($order = Criteria::ASC) Order by the TAS_UID column
 * @method     TaskQuery orderByTasType($order = Criteria::ASC) Order by the TAS_TYPE column
 * @method     TaskQuery orderByTasDuration($order = Criteria::ASC) Order by the TAS_DURATION column
 * @method     TaskQuery orderByTasDelayType($order = Criteria::ASC) Order by the TAS_DELAY_TYPE column
 * @method     TaskQuery orderByTasTemporizer($order = Criteria::ASC) Order by the TAS_TEMPORIZER column
 * @method     TaskQuery orderByTasTypeDay($order = Criteria::ASC) Order by the TAS_TYPE_DAY column
 * @method     TaskQuery orderByTasTimeunit($order = Criteria::ASC) Order by the TAS_TIMEUNIT column
 * @method     TaskQuery orderByTasAlert($order = Criteria::ASC) Order by the TAS_ALERT column
 * @method     TaskQuery orderByTasPriorityVariable($order = Criteria::ASC) Order by the TAS_PRIORITY_VARIABLE column
 * @method     TaskQuery orderByTasAssignType($order = Criteria::ASC) Order by the TAS_ASSIGN_TYPE column
 * @method     TaskQuery orderByTasAssignVariable($order = Criteria::ASC) Order by the TAS_ASSIGN_VARIABLE column
 * @method     TaskQuery orderByTasGroupVariable($order = Criteria::ASC) Order by the TAS_GROUP_VARIABLE column
 * @method     TaskQuery orderByTasMiInstanceVariable($order = Criteria::ASC) Order by the TAS_MI_INSTANCE_VARIABLE column
 * @method     TaskQuery orderByTasMiCompleteVariable($order = Criteria::ASC) Order by the TAS_MI_COMPLETE_VARIABLE column
 * @method     TaskQuery orderByTasAssignLocation($order = Criteria::ASC) Order by the TAS_ASSIGN_LOCATION column
 * @method     TaskQuery orderByTasAssignLocationAdhoc($order = Criteria::ASC) Order by the TAS_ASSIGN_LOCATION_ADHOC column
 * @method     TaskQuery orderByTasTransferFly($order = Criteria::ASC) Order by the TAS_TRANSFER_FLY column
 * @method     TaskQuery orderByTasLastAssigned($order = Criteria::ASC) Order by the TAS_LAST_ASSIGNED column
 * @method     TaskQuery orderByTasUser($order = Criteria::ASC) Order by the TAS_USER column
 * @method     TaskQuery orderByTasCanUpload($order = Criteria::ASC) Order by the TAS_CAN_UPLOAD column
 * @method     TaskQuery orderByTasViewUpload($order = Criteria::ASC) Order by the TAS_VIEW_UPLOAD column
 * @method     TaskQuery orderByTasViewAdditionalDocumentation($order = Criteria::ASC) Order by the TAS_VIEW_ADDITIONAL_DOCUMENTATION column
 * @method     TaskQuery orderByTasCanCancel($order = Criteria::ASC) Order by the TAS_CAN_CANCEL column
 * @method     TaskQuery orderByTasOwnerApp($order = Criteria::ASC) Order by the TAS_OWNER_APP column
 * @method     TaskQuery orderByStgUid($order = Criteria::ASC) Order by the STG_UID column
 * @method     TaskQuery orderByTasCanPause($order = Criteria::ASC) Order by the TAS_CAN_PAUSE column
 * @method     TaskQuery orderByTasCanSendMessage($order = Criteria::ASC) Order by the TAS_CAN_SEND_MESSAGE column
 * @method     TaskQuery orderByTasCanDeleteDocs($order = Criteria::ASC) Order by the TAS_CAN_DELETE_DOCS column
 * @method     TaskQuery orderByTasSelfService($order = Criteria::ASC) Order by the TAS_SELF_SERVICE column
 * @method     TaskQuery orderByTasStart($order = Criteria::ASC) Order by the TAS_START column
 * @method     TaskQuery orderByTasToLastUser($order = Criteria::ASC) Order by the TAS_TO_LAST_USER column
 * @method     TaskQuery orderByTasSendLastEmail($order = Criteria::ASC) Order by the TAS_SEND_LAST_EMAIL column
 * @method     TaskQuery orderByTasDerivation($order = Criteria::ASC) Order by the TAS_DERIVATION column
 * @method     TaskQuery orderByTasPosx($order = Criteria::ASC) Order by the TAS_POSX column
 * @method     TaskQuery orderByTasPosy($order = Criteria::ASC) Order by the TAS_POSY column
 * @method     TaskQuery orderByTasWidth($order = Criteria::ASC) Order by the TAS_WIDTH column
 * @method     TaskQuery orderByTasHeight($order = Criteria::ASC) Order by the TAS_HEIGHT column
 * @method     TaskQuery orderByTasColor($order = Criteria::ASC) Order by the TAS_COLOR column
 * @method     TaskQuery orderByTasEvnUid($order = Criteria::ASC) Order by the TAS_EVN_UID column
 * @method     TaskQuery orderByTasBoundary($order = Criteria::ASC) Order by the TAS_BOUNDARY column
 * @method     TaskQuery orderByTasDerivationScreenTpl($order = Criteria::ASC) Order by the TAS_DERIVATION_SCREEN_TPL column
 * @method     TaskQuery orderByTasSelfserviceTimeout($order = Criteria::ASC) Order by the TAS_SELFSERVICE_TIMEOUT column
 * @method     TaskQuery orderByTasSelfserviceTime($order = Criteria::ASC) Order by the TAS_SELFSERVICE_TIME column
 * @method     TaskQuery orderByTasSelfserviceTimeUnit($order = Criteria::ASC) Order by the TAS_SELFSERVICE_TIME_UNIT column
 * @method     TaskQuery orderByTasSelfserviceTriggerUid($order = Criteria::ASC) Order by the TAS_SELFSERVICE_TRIGGER_UID column
 *
 * @method     TaskQuery groupByProUid() Group by the PRO_UID column
 * @method     TaskQuery groupByTasUid() Group by the TAS_UID column
 * @method     TaskQuery groupByTasType() Group by the TAS_TYPE column
 * @method     TaskQuery groupByTasDuration() Group by the TAS_DURATION column
 * @method     TaskQuery groupByTasDelayType() Group by the TAS_DELAY_TYPE column
 * @method     TaskQuery groupByTasTemporizer() Group by the TAS_TEMPORIZER column
 * @method     TaskQuery groupByTasTypeDay() Group by the TAS_TYPE_DAY column
 * @method     TaskQuery groupByTasTimeunit() Group by the TAS_TIMEUNIT column
 * @method     TaskQuery groupByTasAlert() Group by the TAS_ALERT column
 * @method     TaskQuery groupByTasPriorityVariable() Group by the TAS_PRIORITY_VARIABLE column
 * @method     TaskQuery groupByTasAssignType() Group by the TAS_ASSIGN_TYPE column
 * @method     TaskQuery groupByTasAssignVariable() Group by the TAS_ASSIGN_VARIABLE column
 * @method     TaskQuery groupByTasGroupVariable() Group by the TAS_GROUP_VARIABLE column
 * @method     TaskQuery groupByTasMiInstanceVariable() Group by the TAS_MI_INSTANCE_VARIABLE column
 * @method     TaskQuery groupByTasMiCompleteVariable() Group by the TAS_MI_COMPLETE_VARIABLE column
 * @method     TaskQuery groupByTasAssignLocation() Group by the TAS_ASSIGN_LOCATION column
 * @method     TaskQuery groupByTasAssignLocationAdhoc() Group by the TAS_ASSIGN_LOCATION_ADHOC column
 * @method     TaskQuery groupByTasTransferFly() Group by the TAS_TRANSFER_FLY column
 * @method     TaskQuery groupByTasLastAssigned() Group by the TAS_LAST_ASSIGNED column
 * @method     TaskQuery groupByTasUser() Group by the TAS_USER column
 * @method     TaskQuery groupByTasCanUpload() Group by the TAS_CAN_UPLOAD column
 * @method     TaskQuery groupByTasViewUpload() Group by the TAS_VIEW_UPLOAD column
 * @method     TaskQuery groupByTasViewAdditionalDocumentation() Group by the TAS_VIEW_ADDITIONAL_DOCUMENTATION column
 * @method     TaskQuery groupByTasCanCancel() Group by the TAS_CAN_CANCEL column
 * @method     TaskQuery groupByTasOwnerApp() Group by the TAS_OWNER_APP column
 * @method     TaskQuery groupByStgUid() Group by the STG_UID column
 * @method     TaskQuery groupByTasCanPause() Group by the TAS_CAN_PAUSE column
 * @method     TaskQuery groupByTasCanSendMessage() Group by the TAS_CAN_SEND_MESSAGE column
 * @method     TaskQuery groupByTasCanDeleteDocs() Group by the TAS_CAN_DELETE_DOCS column
 * @method     TaskQuery groupByTasSelfService() Group by the TAS_SELF_SERVICE column
 * @method     TaskQuery groupByTasStart() Group by the TAS_START column
 * @method     TaskQuery groupByTasToLastUser() Group by the TAS_TO_LAST_USER column
 * @method     TaskQuery groupByTasSendLastEmail() Group by the TAS_SEND_LAST_EMAIL column
 * @method     TaskQuery groupByTasDerivation() Group by the TAS_DERIVATION column
 * @method     TaskQuery groupByTasPosx() Group by the TAS_POSX column
 * @method     TaskQuery groupByTasPosy() Group by the TAS_POSY column
 * @method     TaskQuery groupByTasWidth() Group by the TAS_WIDTH column
 * @method     TaskQuery groupByTasHeight() Group by the TAS_HEIGHT column
 * @method     TaskQuery groupByTasColor() Group by the TAS_COLOR column
 * @method     TaskQuery groupByTasEvnUid() Group by the TAS_EVN_UID column
 * @method     TaskQuery groupByTasBoundary() Group by the TAS_BOUNDARY column
 * @method     TaskQuery groupByTasDerivationScreenTpl() Group by the TAS_DERIVATION_SCREEN_TPL column
 * @method     TaskQuery groupByTasSelfserviceTimeout() Group by the TAS_SELFSERVICE_TIMEOUT column
 * @method     TaskQuery groupByTasSelfserviceTime() Group by the TAS_SELFSERVICE_TIME column
 * @method     TaskQuery groupByTasSelfserviceTimeUnit() Group by the TAS_SELFSERVICE_TIME_UNIT column
 * @method     TaskQuery groupByTasSelfserviceTriggerUid() Group by the TAS_SELFSERVICE_TRIGGER_UID column
 *
 * @method     TaskQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     TaskQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     TaskQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Task findOne(PropelPDO $con = null) Return the first Task matching the query
 * @method     Task findOneOrCreate(PropelPDO $con = null) Return the first Task matching the query, or a new Task object populated from the query conditions when no match is found
 *
 * @method     Task findOneByProUid(string $PRO_UID) Return the first Task filtered by the PRO_UID column
 * @method     Task findOneByTasUid(string $TAS_UID) Return the first Task filtered by the TAS_UID column
 * @method     Task findOneByTasType(string $TAS_TYPE) Return the first Task filtered by the TAS_TYPE column
 * @method     Task findOneByTasDuration(double $TAS_DURATION) Return the first Task filtered by the TAS_DURATION column
 * @method     Task findOneByTasDelayType(string $TAS_DELAY_TYPE) Return the first Task filtered by the TAS_DELAY_TYPE column
 * @method     Task findOneByTasTemporizer(double $TAS_TEMPORIZER) Return the first Task filtered by the TAS_TEMPORIZER column
 * @method     Task findOneByTasTypeDay(string $TAS_TYPE_DAY) Return the first Task filtered by the TAS_TYPE_DAY column
 * @method     Task findOneByTasTimeunit(string $TAS_TIMEUNIT) Return the first Task filtered by the TAS_TIMEUNIT column
 * @method     Task findOneByTasAlert(string $TAS_ALERT) Return the first Task filtered by the TAS_ALERT column
 * @method     Task findOneByTasPriorityVariable(string $TAS_PRIORITY_VARIABLE) Return the first Task filtered by the TAS_PRIORITY_VARIABLE column
 * @method     Task findOneByTasAssignType(string $TAS_ASSIGN_TYPE) Return the first Task filtered by the TAS_ASSIGN_TYPE column
 * @method     Task findOneByTasAssignVariable(string $TAS_ASSIGN_VARIABLE) Return the first Task filtered by the TAS_ASSIGN_VARIABLE column
 * @method     Task findOneByTasGroupVariable(string $TAS_GROUP_VARIABLE) Return the first Task filtered by the TAS_GROUP_VARIABLE column
 * @method     Task findOneByTasMiInstanceVariable(string $TAS_MI_INSTANCE_VARIABLE) Return the first Task filtered by the TAS_MI_INSTANCE_VARIABLE column
 * @method     Task findOneByTasMiCompleteVariable(string $TAS_MI_COMPLETE_VARIABLE) Return the first Task filtered by the TAS_MI_COMPLETE_VARIABLE column
 * @method     Task findOneByTasAssignLocation(string $TAS_ASSIGN_LOCATION) Return the first Task filtered by the TAS_ASSIGN_LOCATION column
 * @method     Task findOneByTasAssignLocationAdhoc(string $TAS_ASSIGN_LOCATION_ADHOC) Return the first Task filtered by the TAS_ASSIGN_LOCATION_ADHOC column
 * @method     Task findOneByTasTransferFly(string $TAS_TRANSFER_FLY) Return the first Task filtered by the TAS_TRANSFER_FLY column
 * @method     Task findOneByTasLastAssigned(string $TAS_LAST_ASSIGNED) Return the first Task filtered by the TAS_LAST_ASSIGNED column
 * @method     Task findOneByTasUser(string $TAS_USER) Return the first Task filtered by the TAS_USER column
 * @method     Task findOneByTasCanUpload(string $TAS_CAN_UPLOAD) Return the first Task filtered by the TAS_CAN_UPLOAD column
 * @method     Task findOneByTasViewUpload(string $TAS_VIEW_UPLOAD) Return the first Task filtered by the TAS_VIEW_UPLOAD column
 * @method     Task findOneByTasViewAdditionalDocumentation(string $TAS_VIEW_ADDITIONAL_DOCUMENTATION) Return the first Task filtered by the TAS_VIEW_ADDITIONAL_DOCUMENTATION column
 * @method     Task findOneByTasCanCancel(string $TAS_CAN_CANCEL) Return the first Task filtered by the TAS_CAN_CANCEL column
 * @method     Task findOneByTasOwnerApp(string $TAS_OWNER_APP) Return the first Task filtered by the TAS_OWNER_APP column
 * @method     Task findOneByStgUid(string $STG_UID) Return the first Task filtered by the STG_UID column
 * @method     Task findOneByTasCanPause(string $TAS_CAN_PAUSE) Return the first Task filtered by the TAS_CAN_PAUSE column
 * @method     Task findOneByTasCanSendMessage(string $TAS_CAN_SEND_MESSAGE) Return the first Task filtered by the TAS_CAN_SEND_MESSAGE column
 * @method     Task findOneByTasCanDeleteDocs(string $TAS_CAN_DELETE_DOCS) Return the first Task filtered by the TAS_CAN_DELETE_DOCS column
 * @method     Task findOneByTasSelfService(string $TAS_SELF_SERVICE) Return the first Task filtered by the TAS_SELF_SERVICE column
 * @method     Task findOneByTasStart(string $TAS_START) Return the first Task filtered by the TAS_START column
 * @method     Task findOneByTasToLastUser(string $TAS_TO_LAST_USER) Return the first Task filtered by the TAS_TO_LAST_USER column
 * @method     Task findOneByTasSendLastEmail(string $TAS_SEND_LAST_EMAIL) Return the first Task filtered by the TAS_SEND_LAST_EMAIL column
 * @method     Task findOneByTasDerivation(string $TAS_DERIVATION) Return the first Task filtered by the TAS_DERIVATION column
 * @method     Task findOneByTasPosx(int $TAS_POSX) Return the first Task filtered by the TAS_POSX column
 * @method     Task findOneByTasPosy(int $TAS_POSY) Return the first Task filtered by the TAS_POSY column
 * @method     Task findOneByTasWidth(int $TAS_WIDTH) Return the first Task filtered by the TAS_WIDTH column
 * @method     Task findOneByTasHeight(int $TAS_HEIGHT) Return the first Task filtered by the TAS_HEIGHT column
 * @method     Task findOneByTasColor(string $TAS_COLOR) Return the first Task filtered by the TAS_COLOR column
 * @method     Task findOneByTasEvnUid(string $TAS_EVN_UID) Return the first Task filtered by the TAS_EVN_UID column
 * @method     Task findOneByTasBoundary(string $TAS_BOUNDARY) Return the first Task filtered by the TAS_BOUNDARY column
 * @method     Task findOneByTasDerivationScreenTpl(string $TAS_DERIVATION_SCREEN_TPL) Return the first Task filtered by the TAS_DERIVATION_SCREEN_TPL column
 * @method     Task findOneByTasSelfserviceTimeout(int $TAS_SELFSERVICE_TIMEOUT) Return the first Task filtered by the TAS_SELFSERVICE_TIMEOUT column
 * @method     Task findOneByTasSelfserviceTime(string $TAS_SELFSERVICE_TIME) Return the first Task filtered by the TAS_SELFSERVICE_TIME column
 * @method     Task findOneByTasSelfserviceTimeUnit(string $TAS_SELFSERVICE_TIME_UNIT) Return the first Task filtered by the TAS_SELFSERVICE_TIME_UNIT column
 * @method     Task findOneByTasSelfserviceTriggerUid(string $TAS_SELFSERVICE_TRIGGER_UID) Return the first Task filtered by the TAS_SELFSERVICE_TRIGGER_UID column
 *
 * @method     array findByProUid(string $PRO_UID) Return Task objects filtered by the PRO_UID column
 * @method     array findByTasUid(string $TAS_UID) Return Task objects filtered by the TAS_UID column
 * @method     array findByTasType(string $TAS_TYPE) Return Task objects filtered by the TAS_TYPE column
 * @method     array findByTasDuration(double $TAS_DURATION) Return Task objects filtered by the TAS_DURATION column
 * @method     array findByTasDelayType(string $TAS_DELAY_TYPE) Return Task objects filtered by the TAS_DELAY_TYPE column
 * @method     array findByTasTemporizer(double $TAS_TEMPORIZER) Return Task objects filtered by the TAS_TEMPORIZER column
 * @method     array findByTasTypeDay(string $TAS_TYPE_DAY) Return Task objects filtered by the TAS_TYPE_DAY column
 * @method     array findByTasTimeunit(string $TAS_TIMEUNIT) Return Task objects filtered by the TAS_TIMEUNIT column
 * @method     array findByTasAlert(string $TAS_ALERT) Return Task objects filtered by the TAS_ALERT column
 * @method     array findByTasPriorityVariable(string $TAS_PRIORITY_VARIABLE) Return Task objects filtered by the TAS_PRIORITY_VARIABLE column
 * @method     array findByTasAssignType(string $TAS_ASSIGN_TYPE) Return Task objects filtered by the TAS_ASSIGN_TYPE column
 * @method     array findByTasAssignVariable(string $TAS_ASSIGN_VARIABLE) Return Task objects filtered by the TAS_ASSIGN_VARIABLE column
 * @method     array findByTasGroupVariable(string $TAS_GROUP_VARIABLE) Return Task objects filtered by the TAS_GROUP_VARIABLE column
 * @method     array findByTasMiInstanceVariable(string $TAS_MI_INSTANCE_VARIABLE) Return Task objects filtered by the TAS_MI_INSTANCE_VARIABLE column
 * @method     array findByTasMiCompleteVariable(string $TAS_MI_COMPLETE_VARIABLE) Return Task objects filtered by the TAS_MI_COMPLETE_VARIABLE column
 * @method     array findByTasAssignLocation(string $TAS_ASSIGN_LOCATION) Return Task objects filtered by the TAS_ASSIGN_LOCATION column
 * @method     array findByTasAssignLocationAdhoc(string $TAS_ASSIGN_LOCATION_ADHOC) Return Task objects filtered by the TAS_ASSIGN_LOCATION_ADHOC column
 * @method     array findByTasTransferFly(string $TAS_TRANSFER_FLY) Return Task objects filtered by the TAS_TRANSFER_FLY column
 * @method     array findByTasLastAssigned(string $TAS_LAST_ASSIGNED) Return Task objects filtered by the TAS_LAST_ASSIGNED column
 * @method     array findByTasUser(string $TAS_USER) Return Task objects filtered by the TAS_USER column
 * @method     array findByTasCanUpload(string $TAS_CAN_UPLOAD) Return Task objects filtered by the TAS_CAN_UPLOAD column
 * @method     array findByTasViewUpload(string $TAS_VIEW_UPLOAD) Return Task objects filtered by the TAS_VIEW_UPLOAD column
 * @method     array findByTasViewAdditionalDocumentation(string $TAS_VIEW_ADDITIONAL_DOCUMENTATION) Return Task objects filtered by the TAS_VIEW_ADDITIONAL_DOCUMENTATION column
 * @method     array findByTasCanCancel(string $TAS_CAN_CANCEL) Return Task objects filtered by the TAS_CAN_CANCEL column
 * @method     array findByTasOwnerApp(string $TAS_OWNER_APP) Return Task objects filtered by the TAS_OWNER_APP column
 * @method     array findByStgUid(string $STG_UID) Return Task objects filtered by the STG_UID column
 * @method     array findByTasCanPause(string $TAS_CAN_PAUSE) Return Task objects filtered by the TAS_CAN_PAUSE column
 * @method     array findByTasCanSendMessage(string $TAS_CAN_SEND_MESSAGE) Return Task objects filtered by the TAS_CAN_SEND_MESSAGE column
 * @method     array findByTasCanDeleteDocs(string $TAS_CAN_DELETE_DOCS) Return Task objects filtered by the TAS_CAN_DELETE_DOCS column
 * @method     array findByTasSelfService(string $TAS_SELF_SERVICE) Return Task objects filtered by the TAS_SELF_SERVICE column
 * @method     array findByTasStart(string $TAS_START) Return Task objects filtered by the TAS_START column
 * @method     array findByTasToLastUser(string $TAS_TO_LAST_USER) Return Task objects filtered by the TAS_TO_LAST_USER column
 * @method     array findByTasSendLastEmail(string $TAS_SEND_LAST_EMAIL) Return Task objects filtered by the TAS_SEND_LAST_EMAIL column
 * @method     array findByTasDerivation(string $TAS_DERIVATION) Return Task objects filtered by the TAS_DERIVATION column
 * @method     array findByTasPosx(int $TAS_POSX) Return Task objects filtered by the TAS_POSX column
 * @method     array findByTasPosy(int $TAS_POSY) Return Task objects filtered by the TAS_POSY column
 * @method     array findByTasWidth(int $TAS_WIDTH) Return Task objects filtered by the TAS_WIDTH column
 * @method     array findByTasHeight(int $TAS_HEIGHT) Return Task objects filtered by the TAS_HEIGHT column
 * @method     array findByTasColor(string $TAS_COLOR) Return Task objects filtered by the TAS_COLOR column
 * @method     array findByTasEvnUid(string $TAS_EVN_UID) Return Task objects filtered by the TAS_EVN_UID column
 * @method     array findByTasBoundary(string $TAS_BOUNDARY) Return Task objects filtered by the TAS_BOUNDARY column
 * @method     array findByTasDerivationScreenTpl(string $TAS_DERIVATION_SCREEN_TPL) Return Task objects filtered by the TAS_DERIVATION_SCREEN_TPL column
 * @method     array findByTasSelfserviceTimeout(int $TAS_SELFSERVICE_TIMEOUT) Return Task objects filtered by the TAS_SELFSERVICE_TIMEOUT column
 * @method     array findByTasSelfserviceTime(string $TAS_SELFSERVICE_TIME) Return Task objects filtered by the TAS_SELFSERVICE_TIME column
 * @method     array findByTasSelfserviceTimeUnit(string $TAS_SELFSERVICE_TIME_UNIT) Return Task objects filtered by the TAS_SELFSERVICE_TIME_UNIT column
 * @method     array findByTasSelfserviceTriggerUid(string $TAS_SELFSERVICE_TRIGGER_UID) Return Task objects filtered by the TAS_SELFSERVICE_TRIGGER_UID column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseTaskQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseTaskQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Task', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new TaskQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    TaskQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof TaskQuery) {
            return $criteria;
        }
        $query = new TaskQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }
        return $query;
    }

    /**
     * Find object by primary key
     * Use instance pooling to avoid a database query if the object exists
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     * @param     mixed $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    Task|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = TaskPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
            // the object is alredy in the instance pool
            return $obj;
        } else {
            // the object has not been requested yet, or the formatter is not an object formatter
            $criteria = $this->isKeepQuery() ? clone $this : $this;
            $stmt = $criteria
                ->filterByPrimaryKey($key)
                ->getSelectStatement($con);
            return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
        }
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, $con = null)
    {
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        return $this
            ->filterByPrimaryKeys($keys)
            ->find($con);
    }

    /**
     * Filter the query by primary key
     *
     * @param     mixed $key Primary key to use for the query
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(TaskPeer::TAS_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(TaskPeer::TAS_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the PRO_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByProUid('fooValue');   // WHERE PRO_UID = 'fooValue'
     * $query->filterByProUid('%fooValue%'); // WHERE PRO_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $proUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByProUid($proUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($proUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $proUid)) {
                $proUid = str_replace('*', '%', $proUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the TAS_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByTasUid('fooValue');   // WHERE TAS_UID = 'fooValue'
     * $query->filterByTasUid('%fooValue%'); // WHERE TAS_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasUid($tasUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasUid)) {
                $tasUid = str_replace('*', '%', $tasUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_UID, $tasUid, $comparison);
    }

    /**
     * Filter the query on the TAS_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByTasType('fooValue');   // WHERE TAS_TYPE = 'fooValue'
     * $query->filterByTasType('%fooValue%'); // WHERE TAS_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasType($tasType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasType)) {
                $tasType = str_replace('*', '%', $tasType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_TYPE, $tasType, $comparison);
    }

    /**
     * Filter the query on the TAS_DURATION column
     *
     * Example usage:
     * <code>
     * $query->filterByTasDuration(1234); // WHERE TAS_DURATION = 1234
     * $query->filterByTasDuration(array(12, 34)); // WHERE TAS_DURATION IN (12, 34)
     * $query->filterByTasDuration(array('min' => 12)); // WHERE TAS_DURATION > 12
     * </code>
     *
     * @param     mixed $tasDuration The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasDuration($tasDuration = null, $comparison = null)
    {
        if (is_array($tasDuration)) {
            $useMinMax = false;
            if (isset($tasDuration['min'])) {
                $this->addUsingAlias(TaskPeer::TAS_DURATION, $tasDuration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tasDuration['max'])) {
                $this->addUsingAlias(TaskPeer::TAS_DURATION, $tasDuration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_DURATION, $tasDuration, $comparison);
    }

    /**
     * Filter the query on the TAS_DELAY_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByTasDelayType('fooValue');   // WHERE TAS_DELAY_TYPE = 'fooValue'
     * $query->filterByTasDelayType('%fooValue%'); // WHERE TAS_DELAY_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasDelayType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasDelayType($tasDelayType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasDelayType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasDelayType)) {
                $tasDelayType = str_replace('*', '%', $tasDelayType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_DELAY_TYPE, $tasDelayType, $comparison);
    }

    /**
     * Filter the query on the TAS_TEMPORIZER column
     *
     * Example usage:
     * <code>
     * $query->filterByTasTemporizer(1234); // WHERE TAS_TEMPORIZER = 1234
     * $query->filterByTasTemporizer(array(12, 34)); // WHERE TAS_TEMPORIZER IN (12, 34)
     * $query->filterByTasTemporizer(array('min' => 12)); // WHERE TAS_TEMPORIZER > 12
     * </code>
     *
     * @param     mixed $tasTemporizer The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasTemporizer($tasTemporizer = null, $comparison = null)
    {
        if (is_array($tasTemporizer)) {
            $useMinMax = false;
            if (isset($tasTemporizer['min'])) {
                $this->addUsingAlias(TaskPeer::TAS_TEMPORIZER, $tasTemporizer['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tasTemporizer['max'])) {
                $this->addUsingAlias(TaskPeer::TAS_TEMPORIZER, $tasTemporizer['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_TEMPORIZER, $tasTemporizer, $comparison);
    }

    /**
     * Filter the query on the TAS_TYPE_DAY column
     *
     * Example usage:
     * <code>
     * $query->filterByTasTypeDay('fooValue');   // WHERE TAS_TYPE_DAY = 'fooValue'
     * $query->filterByTasTypeDay('%fooValue%'); // WHERE TAS_TYPE_DAY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasTypeDay The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasTypeDay($tasTypeDay = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasTypeDay)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasTypeDay)) {
                $tasTypeDay = str_replace('*', '%', $tasTypeDay);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_TYPE_DAY, $tasTypeDay, $comparison);
    }

    /**
     * Filter the query on the TAS_TIMEUNIT column
     *
     * Example usage:
     * <code>
     * $query->filterByTasTimeunit('fooValue');   // WHERE TAS_TIMEUNIT = 'fooValue'
     * $query->filterByTasTimeunit('%fooValue%'); // WHERE TAS_TIMEUNIT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasTimeunit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasTimeunit($tasTimeunit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasTimeunit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasTimeunit)) {
                $tasTimeunit = str_replace('*', '%', $tasTimeunit);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_TIMEUNIT, $tasTimeunit, $comparison);
    }

    /**
     * Filter the query on the TAS_ALERT column
     *
     * Example usage:
     * <code>
     * $query->filterByTasAlert('fooValue');   // WHERE TAS_ALERT = 'fooValue'
     * $query->filterByTasAlert('%fooValue%'); // WHERE TAS_ALERT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasAlert The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasAlert($tasAlert = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasAlert)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasAlert)) {
                $tasAlert = str_replace('*', '%', $tasAlert);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_ALERT, $tasAlert, $comparison);
    }

    /**
     * Filter the query on the TAS_PRIORITY_VARIABLE column
     *
     * Example usage:
     * <code>
     * $query->filterByTasPriorityVariable('fooValue');   // WHERE TAS_PRIORITY_VARIABLE = 'fooValue'
     * $query->filterByTasPriorityVariable('%fooValue%'); // WHERE TAS_PRIORITY_VARIABLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasPriorityVariable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasPriorityVariable($tasPriorityVariable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasPriorityVariable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasPriorityVariable)) {
                $tasPriorityVariable = str_replace('*', '%', $tasPriorityVariable);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_PRIORITY_VARIABLE, $tasPriorityVariable, $comparison);
    }

    /**
     * Filter the query on the TAS_ASSIGN_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByTasAssignType('fooValue');   // WHERE TAS_ASSIGN_TYPE = 'fooValue'
     * $query->filterByTasAssignType('%fooValue%'); // WHERE TAS_ASSIGN_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasAssignType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasAssignType($tasAssignType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasAssignType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasAssignType)) {
                $tasAssignType = str_replace('*', '%', $tasAssignType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_ASSIGN_TYPE, $tasAssignType, $comparison);
    }

    /**
     * Filter the query on the TAS_ASSIGN_VARIABLE column
     *
     * Example usage:
     * <code>
     * $query->filterByTasAssignVariable('fooValue');   // WHERE TAS_ASSIGN_VARIABLE = 'fooValue'
     * $query->filterByTasAssignVariable('%fooValue%'); // WHERE TAS_ASSIGN_VARIABLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasAssignVariable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasAssignVariable($tasAssignVariable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasAssignVariable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasAssignVariable)) {
                $tasAssignVariable = str_replace('*', '%', $tasAssignVariable);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_ASSIGN_VARIABLE, $tasAssignVariable, $comparison);
    }

    /**
     * Filter the query on the TAS_GROUP_VARIABLE column
     *
     * Example usage:
     * <code>
     * $query->filterByTasGroupVariable('fooValue');   // WHERE TAS_GROUP_VARIABLE = 'fooValue'
     * $query->filterByTasGroupVariable('%fooValue%'); // WHERE TAS_GROUP_VARIABLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasGroupVariable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasGroupVariable($tasGroupVariable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasGroupVariable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasGroupVariable)) {
                $tasGroupVariable = str_replace('*', '%', $tasGroupVariable);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_GROUP_VARIABLE, $tasGroupVariable, $comparison);
    }

    /**
     * Filter the query on the TAS_MI_INSTANCE_VARIABLE column
     *
     * Example usage:
     * <code>
     * $query->filterByTasMiInstanceVariable('fooValue');   // WHERE TAS_MI_INSTANCE_VARIABLE = 'fooValue'
     * $query->filterByTasMiInstanceVariable('%fooValue%'); // WHERE TAS_MI_INSTANCE_VARIABLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasMiInstanceVariable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasMiInstanceVariable($tasMiInstanceVariable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasMiInstanceVariable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasMiInstanceVariable)) {
                $tasMiInstanceVariable = str_replace('*', '%', $tasMiInstanceVariable);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_MI_INSTANCE_VARIABLE, $tasMiInstanceVariable, $comparison);
    }

    /**
     * Filter the query on the TAS_MI_COMPLETE_VARIABLE column
     *
     * Example usage:
     * <code>
     * $query->filterByTasMiCompleteVariable('fooValue');   // WHERE TAS_MI_COMPLETE_VARIABLE = 'fooValue'
     * $query->filterByTasMiCompleteVariable('%fooValue%'); // WHERE TAS_MI_COMPLETE_VARIABLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasMiCompleteVariable The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasMiCompleteVariable($tasMiCompleteVariable = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasMiCompleteVariable)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasMiCompleteVariable)) {
                $tasMiCompleteVariable = str_replace('*', '%', $tasMiCompleteVariable);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_MI_COMPLETE_VARIABLE, $tasMiCompleteVariable, $comparison);
    }

    /**
     * Filter the query on the TAS_ASSIGN_LOCATION column
     *
     * Example usage:
     * <code>
     * $query->filterByTasAssignLocation('fooValue');   // WHERE TAS_ASSIGN_LOCATION = 'fooValue'
     * $query->filterByTasAssignLocation('%fooValue%'); // WHERE TAS_ASSIGN_LOCATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasAssignLocation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasAssignLocation($tasAssignLocation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasAssignLocation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasAssignLocation)) {
                $tasAssignLocation = str_replace('*', '%', $tasAssignLocation);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_ASSIGN_LOCATION, $tasAssignLocation, $comparison);
    }

    /**
     * Filter the query on the TAS_ASSIGN_LOCATION_ADHOC column
     *
     * Example usage:
     * <code>
     * $query->filterByTasAssignLocationAdhoc('fooValue');   // WHERE TAS_ASSIGN_LOCATION_ADHOC = 'fooValue'
     * $query->filterByTasAssignLocationAdhoc('%fooValue%'); // WHERE TAS_ASSIGN_LOCATION_ADHOC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasAssignLocationAdhoc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasAssignLocationAdhoc($tasAssignLocationAdhoc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasAssignLocationAdhoc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasAssignLocationAdhoc)) {
                $tasAssignLocationAdhoc = str_replace('*', '%', $tasAssignLocationAdhoc);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_ASSIGN_LOCATION_ADHOC, $tasAssignLocationAdhoc, $comparison);
    }

    /**
     * Filter the query on the TAS_TRANSFER_FLY column
     *
     * Example usage:
     * <code>
     * $query->filterByTasTransferFly('fooValue');   // WHERE TAS_TRANSFER_FLY = 'fooValue'
     * $query->filterByTasTransferFly('%fooValue%'); // WHERE TAS_TRANSFER_FLY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasTransferFly The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasTransferFly($tasTransferFly = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasTransferFly)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasTransferFly)) {
                $tasTransferFly = str_replace('*', '%', $tasTransferFly);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_TRANSFER_FLY, $tasTransferFly, $comparison);
    }

    /**
     * Filter the query on the TAS_LAST_ASSIGNED column
     *
     * Example usage:
     * <code>
     * $query->filterByTasLastAssigned('fooValue');   // WHERE TAS_LAST_ASSIGNED = 'fooValue'
     * $query->filterByTasLastAssigned('%fooValue%'); // WHERE TAS_LAST_ASSIGNED LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasLastAssigned The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasLastAssigned($tasLastAssigned = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasLastAssigned)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasLastAssigned)) {
                $tasLastAssigned = str_replace('*', '%', $tasLastAssigned);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_LAST_ASSIGNED, $tasLastAssigned, $comparison);
    }

    /**
     * Filter the query on the TAS_USER column
     *
     * Example usage:
     * <code>
     * $query->filterByTasUser('fooValue');   // WHERE TAS_USER = 'fooValue'
     * $query->filterByTasUser('%fooValue%'); // WHERE TAS_USER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasUser The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasUser($tasUser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasUser)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasUser)) {
                $tasUser = str_replace('*', '%', $tasUser);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_USER, $tasUser, $comparison);
    }

    /**
     * Filter the query on the TAS_CAN_UPLOAD column
     *
     * Example usage:
     * <code>
     * $query->filterByTasCanUpload('fooValue');   // WHERE TAS_CAN_UPLOAD = 'fooValue'
     * $query->filterByTasCanUpload('%fooValue%'); // WHERE TAS_CAN_UPLOAD LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasCanUpload The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasCanUpload($tasCanUpload = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasCanUpload)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasCanUpload)) {
                $tasCanUpload = str_replace('*', '%', $tasCanUpload);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_CAN_UPLOAD, $tasCanUpload, $comparison);
    }

    /**
     * Filter the query on the TAS_VIEW_UPLOAD column
     *
     * Example usage:
     * <code>
     * $query->filterByTasViewUpload('fooValue');   // WHERE TAS_VIEW_UPLOAD = 'fooValue'
     * $query->filterByTasViewUpload('%fooValue%'); // WHERE TAS_VIEW_UPLOAD LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasViewUpload The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasViewUpload($tasViewUpload = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasViewUpload)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasViewUpload)) {
                $tasViewUpload = str_replace('*', '%', $tasViewUpload);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_VIEW_UPLOAD, $tasViewUpload, $comparison);
    }

    /**
     * Filter the query on the TAS_VIEW_ADDITIONAL_DOCUMENTATION column
     *
     * Example usage:
     * <code>
     * $query->filterByTasViewAdditionalDocumentation('fooValue');   // WHERE TAS_VIEW_ADDITIONAL_DOCUMENTATION = 'fooValue'
     * $query->filterByTasViewAdditionalDocumentation('%fooValue%'); // WHERE TAS_VIEW_ADDITIONAL_DOCUMENTATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasViewAdditionalDocumentation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasViewAdditionalDocumentation($tasViewAdditionalDocumentation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasViewAdditionalDocumentation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasViewAdditionalDocumentation)) {
                $tasViewAdditionalDocumentation = str_replace('*', '%', $tasViewAdditionalDocumentation);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_VIEW_ADDITIONAL_DOCUMENTATION, $tasViewAdditionalDocumentation, $comparison);
    }

    /**
     * Filter the query on the TAS_CAN_CANCEL column
     *
     * Example usage:
     * <code>
     * $query->filterByTasCanCancel('fooValue');   // WHERE TAS_CAN_CANCEL = 'fooValue'
     * $query->filterByTasCanCancel('%fooValue%'); // WHERE TAS_CAN_CANCEL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasCanCancel The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasCanCancel($tasCanCancel = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasCanCancel)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasCanCancel)) {
                $tasCanCancel = str_replace('*', '%', $tasCanCancel);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_CAN_CANCEL, $tasCanCancel, $comparison);
    }

    /**
     * Filter the query on the TAS_OWNER_APP column
     *
     * Example usage:
     * <code>
     * $query->filterByTasOwnerApp('fooValue');   // WHERE TAS_OWNER_APP = 'fooValue'
     * $query->filterByTasOwnerApp('%fooValue%'); // WHERE TAS_OWNER_APP LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasOwnerApp The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasOwnerApp($tasOwnerApp = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasOwnerApp)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasOwnerApp)) {
                $tasOwnerApp = str_replace('*', '%', $tasOwnerApp);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_OWNER_APP, $tasOwnerApp, $comparison);
    }

    /**
     * Filter the query on the STG_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByStgUid('fooValue');   // WHERE STG_UID = 'fooValue'
     * $query->filterByStgUid('%fooValue%'); // WHERE STG_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $stgUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByStgUid($stgUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($stgUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $stgUid)) {
                $stgUid = str_replace('*', '%', $stgUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::STG_UID, $stgUid, $comparison);
    }

    /**
     * Filter the query on the TAS_CAN_PAUSE column
     *
     * Example usage:
     * <code>
     * $query->filterByTasCanPause('fooValue');   // WHERE TAS_CAN_PAUSE = 'fooValue'
     * $query->filterByTasCanPause('%fooValue%'); // WHERE TAS_CAN_PAUSE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasCanPause The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasCanPause($tasCanPause = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasCanPause)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasCanPause)) {
                $tasCanPause = str_replace('*', '%', $tasCanPause);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_CAN_PAUSE, $tasCanPause, $comparison);
    }

    /**
     * Filter the query on the TAS_CAN_SEND_MESSAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByTasCanSendMessage('fooValue');   // WHERE TAS_CAN_SEND_MESSAGE = 'fooValue'
     * $query->filterByTasCanSendMessage('%fooValue%'); // WHERE TAS_CAN_SEND_MESSAGE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasCanSendMessage The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasCanSendMessage($tasCanSendMessage = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasCanSendMessage)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasCanSendMessage)) {
                $tasCanSendMessage = str_replace('*', '%', $tasCanSendMessage);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_CAN_SEND_MESSAGE, $tasCanSendMessage, $comparison);
    }

    /**
     * Filter the query on the TAS_CAN_DELETE_DOCS column
     *
     * Example usage:
     * <code>
     * $query->filterByTasCanDeleteDocs('fooValue');   // WHERE TAS_CAN_DELETE_DOCS = 'fooValue'
     * $query->filterByTasCanDeleteDocs('%fooValue%'); // WHERE TAS_CAN_DELETE_DOCS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasCanDeleteDocs The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasCanDeleteDocs($tasCanDeleteDocs = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasCanDeleteDocs)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasCanDeleteDocs)) {
                $tasCanDeleteDocs = str_replace('*', '%', $tasCanDeleteDocs);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_CAN_DELETE_DOCS, $tasCanDeleteDocs, $comparison);
    }

    /**
     * Filter the query on the TAS_SELF_SERVICE column
     *
     * Example usage:
     * <code>
     * $query->filterByTasSelfService('fooValue');   // WHERE TAS_SELF_SERVICE = 'fooValue'
     * $query->filterByTasSelfService('%fooValue%'); // WHERE TAS_SELF_SERVICE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasSelfService The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasSelfService($tasSelfService = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasSelfService)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasSelfService)) {
                $tasSelfService = str_replace('*', '%', $tasSelfService);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_SELF_SERVICE, $tasSelfService, $comparison);
    }

    /**
     * Filter the query on the TAS_START column
     *
     * Example usage:
     * <code>
     * $query->filterByTasStart('fooValue');   // WHERE TAS_START = 'fooValue'
     * $query->filterByTasStart('%fooValue%'); // WHERE TAS_START LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasStart The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasStart($tasStart = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasStart)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasStart)) {
                $tasStart = str_replace('*', '%', $tasStart);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_START, $tasStart, $comparison);
    }

    /**
     * Filter the query on the TAS_TO_LAST_USER column
     *
     * Example usage:
     * <code>
     * $query->filterByTasToLastUser('fooValue');   // WHERE TAS_TO_LAST_USER = 'fooValue'
     * $query->filterByTasToLastUser('%fooValue%'); // WHERE TAS_TO_LAST_USER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasToLastUser The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasToLastUser($tasToLastUser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasToLastUser)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasToLastUser)) {
                $tasToLastUser = str_replace('*', '%', $tasToLastUser);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_TO_LAST_USER, $tasToLastUser, $comparison);
    }

    /**
     * Filter the query on the TAS_SEND_LAST_EMAIL column
     *
     * Example usage:
     * <code>
     * $query->filterByTasSendLastEmail('fooValue');   // WHERE TAS_SEND_LAST_EMAIL = 'fooValue'
     * $query->filterByTasSendLastEmail('%fooValue%'); // WHERE TAS_SEND_LAST_EMAIL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasSendLastEmail The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasSendLastEmail($tasSendLastEmail = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasSendLastEmail)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasSendLastEmail)) {
                $tasSendLastEmail = str_replace('*', '%', $tasSendLastEmail);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_SEND_LAST_EMAIL, $tasSendLastEmail, $comparison);
    }

    /**
     * Filter the query on the TAS_DERIVATION column
     *
     * Example usage:
     * <code>
     * $query->filterByTasDerivation('fooValue');   // WHERE TAS_DERIVATION = 'fooValue'
     * $query->filterByTasDerivation('%fooValue%'); // WHERE TAS_DERIVATION LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasDerivation The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasDerivation($tasDerivation = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasDerivation)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasDerivation)) {
                $tasDerivation = str_replace('*', '%', $tasDerivation);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_DERIVATION, $tasDerivation, $comparison);
    }

    /**
     * Filter the query on the TAS_POSX column
     *
     * Example usage:
     * <code>
     * $query->filterByTasPosx(1234); // WHERE TAS_POSX = 1234
     * $query->filterByTasPosx(array(12, 34)); // WHERE TAS_POSX IN (12, 34)
     * $query->filterByTasPosx(array('min' => 12)); // WHERE TAS_POSX > 12
     * </code>
     *
     * @param     mixed $tasPosx The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasPosx($tasPosx = null, $comparison = null)
    {
        if (is_array($tasPosx)) {
            $useMinMax = false;
            if (isset($tasPosx['min'])) {
                $this->addUsingAlias(TaskPeer::TAS_POSX, $tasPosx['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tasPosx['max'])) {
                $this->addUsingAlias(TaskPeer::TAS_POSX, $tasPosx['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_POSX, $tasPosx, $comparison);
    }

    /**
     * Filter the query on the TAS_POSY column
     *
     * Example usage:
     * <code>
     * $query->filterByTasPosy(1234); // WHERE TAS_POSY = 1234
     * $query->filterByTasPosy(array(12, 34)); // WHERE TAS_POSY IN (12, 34)
     * $query->filterByTasPosy(array('min' => 12)); // WHERE TAS_POSY > 12
     * </code>
     *
     * @param     mixed $tasPosy The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasPosy($tasPosy = null, $comparison = null)
    {
        if (is_array($tasPosy)) {
            $useMinMax = false;
            if (isset($tasPosy['min'])) {
                $this->addUsingAlias(TaskPeer::TAS_POSY, $tasPosy['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tasPosy['max'])) {
                $this->addUsingAlias(TaskPeer::TAS_POSY, $tasPosy['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_POSY, $tasPosy, $comparison);
    }

    /**
     * Filter the query on the TAS_WIDTH column
     *
     * Example usage:
     * <code>
     * $query->filterByTasWidth(1234); // WHERE TAS_WIDTH = 1234
     * $query->filterByTasWidth(array(12, 34)); // WHERE TAS_WIDTH IN (12, 34)
     * $query->filterByTasWidth(array('min' => 12)); // WHERE TAS_WIDTH > 12
     * </code>
     *
     * @param     mixed $tasWidth The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasWidth($tasWidth = null, $comparison = null)
    {
        if (is_array($tasWidth)) {
            $useMinMax = false;
            if (isset($tasWidth['min'])) {
                $this->addUsingAlias(TaskPeer::TAS_WIDTH, $tasWidth['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tasWidth['max'])) {
                $this->addUsingAlias(TaskPeer::TAS_WIDTH, $tasWidth['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_WIDTH, $tasWidth, $comparison);
    }

    /**
     * Filter the query on the TAS_HEIGHT column
     *
     * Example usage:
     * <code>
     * $query->filterByTasHeight(1234); // WHERE TAS_HEIGHT = 1234
     * $query->filterByTasHeight(array(12, 34)); // WHERE TAS_HEIGHT IN (12, 34)
     * $query->filterByTasHeight(array('min' => 12)); // WHERE TAS_HEIGHT > 12
     * </code>
     *
     * @param     mixed $tasHeight The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasHeight($tasHeight = null, $comparison = null)
    {
        if (is_array($tasHeight)) {
            $useMinMax = false;
            if (isset($tasHeight['min'])) {
                $this->addUsingAlias(TaskPeer::TAS_HEIGHT, $tasHeight['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tasHeight['max'])) {
                $this->addUsingAlias(TaskPeer::TAS_HEIGHT, $tasHeight['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_HEIGHT, $tasHeight, $comparison);
    }

    /**
     * Filter the query on the TAS_COLOR column
     *
     * Example usage:
     * <code>
     * $query->filterByTasColor('fooValue');   // WHERE TAS_COLOR = 'fooValue'
     * $query->filterByTasColor('%fooValue%'); // WHERE TAS_COLOR LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasColor The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasColor($tasColor = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasColor)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasColor)) {
                $tasColor = str_replace('*', '%', $tasColor);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_COLOR, $tasColor, $comparison);
    }

    /**
     * Filter the query on the TAS_EVN_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByTasEvnUid('fooValue');   // WHERE TAS_EVN_UID = 'fooValue'
     * $query->filterByTasEvnUid('%fooValue%'); // WHERE TAS_EVN_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasEvnUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasEvnUid($tasEvnUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasEvnUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasEvnUid)) {
                $tasEvnUid = str_replace('*', '%', $tasEvnUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_EVN_UID, $tasEvnUid, $comparison);
    }

    /**
     * Filter the query on the TAS_BOUNDARY column
     *
     * Example usage:
     * <code>
     * $query->filterByTasBoundary('fooValue');   // WHERE TAS_BOUNDARY = 'fooValue'
     * $query->filterByTasBoundary('%fooValue%'); // WHERE TAS_BOUNDARY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasBoundary The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasBoundary($tasBoundary = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasBoundary)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasBoundary)) {
                $tasBoundary = str_replace('*', '%', $tasBoundary);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_BOUNDARY, $tasBoundary, $comparison);
    }

    /**
     * Filter the query on the TAS_DERIVATION_SCREEN_TPL column
     *
     * Example usage:
     * <code>
     * $query->filterByTasDerivationScreenTpl('fooValue');   // WHERE TAS_DERIVATION_SCREEN_TPL = 'fooValue'
     * $query->filterByTasDerivationScreenTpl('%fooValue%'); // WHERE TAS_DERIVATION_SCREEN_TPL LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasDerivationScreenTpl The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasDerivationScreenTpl($tasDerivationScreenTpl = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasDerivationScreenTpl)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasDerivationScreenTpl)) {
                $tasDerivationScreenTpl = str_replace('*', '%', $tasDerivationScreenTpl);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_DERIVATION_SCREEN_TPL, $tasDerivationScreenTpl, $comparison);
    }

    /**
     * Filter the query on the TAS_SELFSERVICE_TIMEOUT column
     *
     * Example usage:
     * <code>
     * $query->filterByTasSelfserviceTimeout(1234); // WHERE TAS_SELFSERVICE_TIMEOUT = 1234
     * $query->filterByTasSelfserviceTimeout(array(12, 34)); // WHERE TAS_SELFSERVICE_TIMEOUT IN (12, 34)
     * $query->filterByTasSelfserviceTimeout(array('min' => 12)); // WHERE TAS_SELFSERVICE_TIMEOUT > 12
     * </code>
     *
     * @param     mixed $tasSelfserviceTimeout The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasSelfserviceTimeout($tasSelfserviceTimeout = null, $comparison = null)
    {
        if (is_array($tasSelfserviceTimeout)) {
            $useMinMax = false;
            if (isset($tasSelfserviceTimeout['min'])) {
                $this->addUsingAlias(TaskPeer::TAS_SELFSERVICE_TIMEOUT, $tasSelfserviceTimeout['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($tasSelfserviceTimeout['max'])) {
                $this->addUsingAlias(TaskPeer::TAS_SELFSERVICE_TIMEOUT, $tasSelfserviceTimeout['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_SELFSERVICE_TIMEOUT, $tasSelfserviceTimeout, $comparison);
    }

    /**
     * Filter the query on the TAS_SELFSERVICE_TIME column
     *
     * Example usage:
     * <code>
     * $query->filterByTasSelfserviceTime('fooValue');   // WHERE TAS_SELFSERVICE_TIME = 'fooValue'
     * $query->filterByTasSelfserviceTime('%fooValue%'); // WHERE TAS_SELFSERVICE_TIME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasSelfserviceTime The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasSelfserviceTime($tasSelfserviceTime = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasSelfserviceTime)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasSelfserviceTime)) {
                $tasSelfserviceTime = str_replace('*', '%', $tasSelfserviceTime);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_SELFSERVICE_TIME, $tasSelfserviceTime, $comparison);
    }

    /**
     * Filter the query on the TAS_SELFSERVICE_TIME_UNIT column
     *
     * Example usage:
     * <code>
     * $query->filterByTasSelfserviceTimeUnit('fooValue');   // WHERE TAS_SELFSERVICE_TIME_UNIT = 'fooValue'
     * $query->filterByTasSelfserviceTimeUnit('%fooValue%'); // WHERE TAS_SELFSERVICE_TIME_UNIT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasSelfserviceTimeUnit The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasSelfserviceTimeUnit($tasSelfserviceTimeUnit = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasSelfserviceTimeUnit)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasSelfserviceTimeUnit)) {
                $tasSelfserviceTimeUnit = str_replace('*', '%', $tasSelfserviceTimeUnit);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_SELFSERVICE_TIME_UNIT, $tasSelfserviceTimeUnit, $comparison);
    }

    /**
     * Filter the query on the TAS_SELFSERVICE_TRIGGER_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByTasSelfserviceTriggerUid('fooValue');   // WHERE TAS_SELFSERVICE_TRIGGER_UID = 'fooValue'
     * $query->filterByTasSelfserviceTriggerUid('%fooValue%'); // WHERE TAS_SELFSERVICE_TRIGGER_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $tasSelfserviceTriggerUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function filterByTasSelfserviceTriggerUid($tasSelfserviceTriggerUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($tasSelfserviceTriggerUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $tasSelfserviceTriggerUid)) {
                $tasSelfserviceTriggerUid = str_replace('*', '%', $tasSelfserviceTriggerUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(TaskPeer::TAS_SELFSERVICE_TRIGGER_UID, $tasSelfserviceTriggerUid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Task $task Object to remove from the list of results
     *
     * @return    TaskQuery The current query, for fluid interface
     */
    public function prune($task = null)
    {
        if ($task) {
            $this->addUsingAlias(TaskPeer::TAS_UID, $task->getTasUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseTaskQuery