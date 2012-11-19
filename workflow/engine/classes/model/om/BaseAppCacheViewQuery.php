<?php


/**
 * Base class that represents a query for the 'APP_CACHE_VIEW' table.
 *
 * 
 *
 * @method     AppCacheViewQuery orderByAppUid($order = Criteria::ASC) Order by the APP_UID column
 * @method     AppCacheViewQuery orderByDelIndex($order = Criteria::ASC) Order by the DEL_INDEX column
 * @method     AppCacheViewQuery orderByAppNumber($order = Criteria::ASC) Order by the APP_NUMBER column
 * @method     AppCacheViewQuery orderByAppStatus($order = Criteria::ASC) Order by the APP_STATUS column
 * @method     AppCacheViewQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 * @method     AppCacheViewQuery orderByPreviousUsrUid($order = Criteria::ASC) Order by the PREVIOUS_USR_UID column
 * @method     AppCacheViewQuery orderByTasUid($order = Criteria::ASC) Order by the TAS_UID column
 * @method     AppCacheViewQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     AppCacheViewQuery orderByDelDelegateDate($order = Criteria::ASC) Order by the DEL_DELEGATE_DATE column
 * @method     AppCacheViewQuery orderByDelInitDate($order = Criteria::ASC) Order by the DEL_INIT_DATE column
 * @method     AppCacheViewQuery orderByDelTaskDueDate($order = Criteria::ASC) Order by the DEL_TASK_DUE_DATE column
 * @method     AppCacheViewQuery orderByDelFinishDate($order = Criteria::ASC) Order by the DEL_FINISH_DATE column
 * @method     AppCacheViewQuery orderByDelThreadStatus($order = Criteria::ASC) Order by the DEL_THREAD_STATUS column
 * @method     AppCacheViewQuery orderByAppThreadStatus($order = Criteria::ASC) Order by the APP_THREAD_STATUS column
 * @method     AppCacheViewQuery orderByAppTitle($order = Criteria::ASC) Order by the APP_TITLE column
 * @method     AppCacheViewQuery orderByAppProTitle($order = Criteria::ASC) Order by the APP_PRO_TITLE column
 * @method     AppCacheViewQuery orderByAppTasTitle($order = Criteria::ASC) Order by the APP_TAS_TITLE column
 * @method     AppCacheViewQuery orderByAppCurrentUser($order = Criteria::ASC) Order by the APP_CURRENT_USER column
 * @method     AppCacheViewQuery orderByAppDelPreviousUser($order = Criteria::ASC) Order by the APP_DEL_PREVIOUS_USER column
 * @method     AppCacheViewQuery orderByDelPriority($order = Criteria::ASC) Order by the DEL_PRIORITY column
 * @method     AppCacheViewQuery orderByDelDuration($order = Criteria::ASC) Order by the DEL_DURATION column
 * @method     AppCacheViewQuery orderByDelQueueDuration($order = Criteria::ASC) Order by the DEL_QUEUE_DURATION column
 * @method     AppCacheViewQuery orderByDelDelayDuration($order = Criteria::ASC) Order by the DEL_DELAY_DURATION column
 * @method     AppCacheViewQuery orderByDelStarted($order = Criteria::ASC) Order by the DEL_STARTED column
 * @method     AppCacheViewQuery orderByDelFinished($order = Criteria::ASC) Order by the DEL_FINISHED column
 * @method     AppCacheViewQuery orderByDelDelayed($order = Criteria::ASC) Order by the DEL_DELAYED column
 * @method     AppCacheViewQuery orderByAppCreateDate($order = Criteria::ASC) Order by the APP_CREATE_DATE column
 * @method     AppCacheViewQuery orderByAppFinishDate($order = Criteria::ASC) Order by the APP_FINISH_DATE column
 * @method     AppCacheViewQuery orderByAppUpdateDate($order = Criteria::ASC) Order by the APP_UPDATE_DATE column
 * @method     AppCacheViewQuery orderByAppOverduePercentage($order = Criteria::ASC) Order by the APP_OVERDUE_PERCENTAGE column
 *
 * @method     AppCacheViewQuery groupByAppUid() Group by the APP_UID column
 * @method     AppCacheViewQuery groupByDelIndex() Group by the DEL_INDEX column
 * @method     AppCacheViewQuery groupByAppNumber() Group by the APP_NUMBER column
 * @method     AppCacheViewQuery groupByAppStatus() Group by the APP_STATUS column
 * @method     AppCacheViewQuery groupByUsrUid() Group by the USR_UID column
 * @method     AppCacheViewQuery groupByPreviousUsrUid() Group by the PREVIOUS_USR_UID column
 * @method     AppCacheViewQuery groupByTasUid() Group by the TAS_UID column
 * @method     AppCacheViewQuery groupByProUid() Group by the PRO_UID column
 * @method     AppCacheViewQuery groupByDelDelegateDate() Group by the DEL_DELEGATE_DATE column
 * @method     AppCacheViewQuery groupByDelInitDate() Group by the DEL_INIT_DATE column
 * @method     AppCacheViewQuery groupByDelTaskDueDate() Group by the DEL_TASK_DUE_DATE column
 * @method     AppCacheViewQuery groupByDelFinishDate() Group by the DEL_FINISH_DATE column
 * @method     AppCacheViewQuery groupByDelThreadStatus() Group by the DEL_THREAD_STATUS column
 * @method     AppCacheViewQuery groupByAppThreadStatus() Group by the APP_THREAD_STATUS column
 * @method     AppCacheViewQuery groupByAppTitle() Group by the APP_TITLE column
 * @method     AppCacheViewQuery groupByAppProTitle() Group by the APP_PRO_TITLE column
 * @method     AppCacheViewQuery groupByAppTasTitle() Group by the APP_TAS_TITLE column
 * @method     AppCacheViewQuery groupByAppCurrentUser() Group by the APP_CURRENT_USER column
 * @method     AppCacheViewQuery groupByAppDelPreviousUser() Group by the APP_DEL_PREVIOUS_USER column
 * @method     AppCacheViewQuery groupByDelPriority() Group by the DEL_PRIORITY column
 * @method     AppCacheViewQuery groupByDelDuration() Group by the DEL_DURATION column
 * @method     AppCacheViewQuery groupByDelQueueDuration() Group by the DEL_QUEUE_DURATION column
 * @method     AppCacheViewQuery groupByDelDelayDuration() Group by the DEL_DELAY_DURATION column
 * @method     AppCacheViewQuery groupByDelStarted() Group by the DEL_STARTED column
 * @method     AppCacheViewQuery groupByDelFinished() Group by the DEL_FINISHED column
 * @method     AppCacheViewQuery groupByDelDelayed() Group by the DEL_DELAYED column
 * @method     AppCacheViewQuery groupByAppCreateDate() Group by the APP_CREATE_DATE column
 * @method     AppCacheViewQuery groupByAppFinishDate() Group by the APP_FINISH_DATE column
 * @method     AppCacheViewQuery groupByAppUpdateDate() Group by the APP_UPDATE_DATE column
 * @method     AppCacheViewQuery groupByAppOverduePercentage() Group by the APP_OVERDUE_PERCENTAGE column
 *
 * @method     AppCacheViewQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AppCacheViewQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AppCacheViewQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AppCacheView findOne(PropelPDO $con = null) Return the first AppCacheView matching the query
 * @method     AppCacheView findOneOrCreate(PropelPDO $con = null) Return the first AppCacheView matching the query, or a new AppCacheView object populated from the query conditions when no match is found
 *
 * @method     AppCacheView findOneByAppUid(string $APP_UID) Return the first AppCacheView filtered by the APP_UID column
 * @method     AppCacheView findOneByDelIndex(int $DEL_INDEX) Return the first AppCacheView filtered by the DEL_INDEX column
 * @method     AppCacheView findOneByAppNumber(int $APP_NUMBER) Return the first AppCacheView filtered by the APP_NUMBER column
 * @method     AppCacheView findOneByAppStatus(string $APP_STATUS) Return the first AppCacheView filtered by the APP_STATUS column
 * @method     AppCacheView findOneByUsrUid(string $USR_UID) Return the first AppCacheView filtered by the USR_UID column
 * @method     AppCacheView findOneByPreviousUsrUid(string $PREVIOUS_USR_UID) Return the first AppCacheView filtered by the PREVIOUS_USR_UID column
 * @method     AppCacheView findOneByTasUid(string $TAS_UID) Return the first AppCacheView filtered by the TAS_UID column
 * @method     AppCacheView findOneByProUid(string $PRO_UID) Return the first AppCacheView filtered by the PRO_UID column
 * @method     AppCacheView findOneByDelDelegateDate(string $DEL_DELEGATE_DATE) Return the first AppCacheView filtered by the DEL_DELEGATE_DATE column
 * @method     AppCacheView findOneByDelInitDate(string $DEL_INIT_DATE) Return the first AppCacheView filtered by the DEL_INIT_DATE column
 * @method     AppCacheView findOneByDelTaskDueDate(string $DEL_TASK_DUE_DATE) Return the first AppCacheView filtered by the DEL_TASK_DUE_DATE column
 * @method     AppCacheView findOneByDelFinishDate(string $DEL_FINISH_DATE) Return the first AppCacheView filtered by the DEL_FINISH_DATE column
 * @method     AppCacheView findOneByDelThreadStatus(string $DEL_THREAD_STATUS) Return the first AppCacheView filtered by the DEL_THREAD_STATUS column
 * @method     AppCacheView findOneByAppThreadStatus(string $APP_THREAD_STATUS) Return the first AppCacheView filtered by the APP_THREAD_STATUS column
 * @method     AppCacheView findOneByAppTitle(string $APP_TITLE) Return the first AppCacheView filtered by the APP_TITLE column
 * @method     AppCacheView findOneByAppProTitle(string $APP_PRO_TITLE) Return the first AppCacheView filtered by the APP_PRO_TITLE column
 * @method     AppCacheView findOneByAppTasTitle(string $APP_TAS_TITLE) Return the first AppCacheView filtered by the APP_TAS_TITLE column
 * @method     AppCacheView findOneByAppCurrentUser(string $APP_CURRENT_USER) Return the first AppCacheView filtered by the APP_CURRENT_USER column
 * @method     AppCacheView findOneByAppDelPreviousUser(string $APP_DEL_PREVIOUS_USER) Return the first AppCacheView filtered by the APP_DEL_PREVIOUS_USER column
 * @method     AppCacheView findOneByDelPriority(string $DEL_PRIORITY) Return the first AppCacheView filtered by the DEL_PRIORITY column
 * @method     AppCacheView findOneByDelDuration(double $DEL_DURATION) Return the first AppCacheView filtered by the DEL_DURATION column
 * @method     AppCacheView findOneByDelQueueDuration(double $DEL_QUEUE_DURATION) Return the first AppCacheView filtered by the DEL_QUEUE_DURATION column
 * @method     AppCacheView findOneByDelDelayDuration(double $DEL_DELAY_DURATION) Return the first AppCacheView filtered by the DEL_DELAY_DURATION column
 * @method     AppCacheView findOneByDelStarted(int $DEL_STARTED) Return the first AppCacheView filtered by the DEL_STARTED column
 * @method     AppCacheView findOneByDelFinished(int $DEL_FINISHED) Return the first AppCacheView filtered by the DEL_FINISHED column
 * @method     AppCacheView findOneByDelDelayed(int $DEL_DELAYED) Return the first AppCacheView filtered by the DEL_DELAYED column
 * @method     AppCacheView findOneByAppCreateDate(string $APP_CREATE_DATE) Return the first AppCacheView filtered by the APP_CREATE_DATE column
 * @method     AppCacheView findOneByAppFinishDate(string $APP_FINISH_DATE) Return the first AppCacheView filtered by the APP_FINISH_DATE column
 * @method     AppCacheView findOneByAppUpdateDate(string $APP_UPDATE_DATE) Return the first AppCacheView filtered by the APP_UPDATE_DATE column
 * @method     AppCacheView findOneByAppOverduePercentage(double $APP_OVERDUE_PERCENTAGE) Return the first AppCacheView filtered by the APP_OVERDUE_PERCENTAGE column
 *
 * @method     array findByAppUid(string $APP_UID) Return AppCacheView objects filtered by the APP_UID column
 * @method     array findByDelIndex(int $DEL_INDEX) Return AppCacheView objects filtered by the DEL_INDEX column
 * @method     array findByAppNumber(int $APP_NUMBER) Return AppCacheView objects filtered by the APP_NUMBER column
 * @method     array findByAppStatus(string $APP_STATUS) Return AppCacheView objects filtered by the APP_STATUS column
 * @method     array findByUsrUid(string $USR_UID) Return AppCacheView objects filtered by the USR_UID column
 * @method     array findByPreviousUsrUid(string $PREVIOUS_USR_UID) Return AppCacheView objects filtered by the PREVIOUS_USR_UID column
 * @method     array findByTasUid(string $TAS_UID) Return AppCacheView objects filtered by the TAS_UID column
 * @method     array findByProUid(string $PRO_UID) Return AppCacheView objects filtered by the PRO_UID column
 * @method     array findByDelDelegateDate(string $DEL_DELEGATE_DATE) Return AppCacheView objects filtered by the DEL_DELEGATE_DATE column
 * @method     array findByDelInitDate(string $DEL_INIT_DATE) Return AppCacheView objects filtered by the DEL_INIT_DATE column
 * @method     array findByDelTaskDueDate(string $DEL_TASK_DUE_DATE) Return AppCacheView objects filtered by the DEL_TASK_DUE_DATE column
 * @method     array findByDelFinishDate(string $DEL_FINISH_DATE) Return AppCacheView objects filtered by the DEL_FINISH_DATE column
 * @method     array findByDelThreadStatus(string $DEL_THREAD_STATUS) Return AppCacheView objects filtered by the DEL_THREAD_STATUS column
 * @method     array findByAppThreadStatus(string $APP_THREAD_STATUS) Return AppCacheView objects filtered by the APP_THREAD_STATUS column
 * @method     array findByAppTitle(string $APP_TITLE) Return AppCacheView objects filtered by the APP_TITLE column
 * @method     array findByAppProTitle(string $APP_PRO_TITLE) Return AppCacheView objects filtered by the APP_PRO_TITLE column
 * @method     array findByAppTasTitle(string $APP_TAS_TITLE) Return AppCacheView objects filtered by the APP_TAS_TITLE column
 * @method     array findByAppCurrentUser(string $APP_CURRENT_USER) Return AppCacheView objects filtered by the APP_CURRENT_USER column
 * @method     array findByAppDelPreviousUser(string $APP_DEL_PREVIOUS_USER) Return AppCacheView objects filtered by the APP_DEL_PREVIOUS_USER column
 * @method     array findByDelPriority(string $DEL_PRIORITY) Return AppCacheView objects filtered by the DEL_PRIORITY column
 * @method     array findByDelDuration(double $DEL_DURATION) Return AppCacheView objects filtered by the DEL_DURATION column
 * @method     array findByDelQueueDuration(double $DEL_QUEUE_DURATION) Return AppCacheView objects filtered by the DEL_QUEUE_DURATION column
 * @method     array findByDelDelayDuration(double $DEL_DELAY_DURATION) Return AppCacheView objects filtered by the DEL_DELAY_DURATION column
 * @method     array findByDelStarted(int $DEL_STARTED) Return AppCacheView objects filtered by the DEL_STARTED column
 * @method     array findByDelFinished(int $DEL_FINISHED) Return AppCacheView objects filtered by the DEL_FINISHED column
 * @method     array findByDelDelayed(int $DEL_DELAYED) Return AppCacheView objects filtered by the DEL_DELAYED column
 * @method     array findByAppCreateDate(string $APP_CREATE_DATE) Return AppCacheView objects filtered by the APP_CREATE_DATE column
 * @method     array findByAppFinishDate(string $APP_FINISH_DATE) Return AppCacheView objects filtered by the APP_FINISH_DATE column
 * @method     array findByAppUpdateDate(string $APP_UPDATE_DATE) Return AppCacheView objects filtered by the APP_UPDATE_DATE column
 * @method     array findByAppOverduePercentage(double $APP_OVERDUE_PERCENTAGE) Return AppCacheView objects filtered by the APP_OVERDUE_PERCENTAGE column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppCacheViewQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAppCacheViewQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'AppCacheView', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AppCacheViewQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    AppCacheViewQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AppCacheViewQuery) {
            return $criteria;
        }
        $query = new AppCacheViewQuery();
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
     * <code>
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     * @param     array[$APP_UID, $DEL_INDEX] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    AppCacheView|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = AppCacheViewPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(AppCacheViewPeer::APP_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(AppCacheViewPeer::DEL_INDEX, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(AppCacheViewPeer::APP_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(AppCacheViewPeer::DEL_INDEX, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the APP_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByAppUid('fooValue');   // WHERE APP_UID = 'fooValue'
     * $query->filterByAppUid('%fooValue%'); // WHERE APP_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByAppUid($appUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appUid)) {
                $appUid = str_replace('*', '%', $appUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::APP_UID, $appUid, $comparison);
    }

    /**
     * Filter the query on the DEL_INDEX column
     *
     * Example usage:
     * <code>
     * $query->filterByDelIndex(1234); // WHERE DEL_INDEX = 1234
     * $query->filterByDelIndex(array(12, 34)); // WHERE DEL_INDEX IN (12, 34)
     * $query->filterByDelIndex(array('min' => 12)); // WHERE DEL_INDEX > 12
     * </code>
     *
     * @param     mixed $delIndex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByDelIndex($delIndex = null, $comparison = null)
    {
        if (is_array($delIndex) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(AppCacheViewPeer::DEL_INDEX, $delIndex, $comparison);
    }

    /**
     * Filter the query on the APP_NUMBER column
     *
     * Example usage:
     * <code>
     * $query->filterByAppNumber(1234); // WHERE APP_NUMBER = 1234
     * $query->filterByAppNumber(array(12, 34)); // WHERE APP_NUMBER IN (12, 34)
     * $query->filterByAppNumber(array('min' => 12)); // WHERE APP_NUMBER > 12
     * </code>
     *
     * @param     mixed $appNumber The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByAppNumber($appNumber = null, $comparison = null)
    {
        if (is_array($appNumber)) {
            $useMinMax = false;
            if (isset($appNumber['min'])) {
                $this->addUsingAlias(AppCacheViewPeer::APP_NUMBER, $appNumber['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appNumber['max'])) {
                $this->addUsingAlias(AppCacheViewPeer::APP_NUMBER, $appNumber['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::APP_NUMBER, $appNumber, $comparison);
    }

    /**
     * Filter the query on the APP_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByAppStatus('fooValue');   // WHERE APP_STATUS = 'fooValue'
     * $query->filterByAppStatus('%fooValue%'); // WHERE APP_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByAppStatus($appStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appStatus)) {
                $appStatus = str_replace('*', '%', $appStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::APP_STATUS, $appStatus, $comparison);
    }

    /**
     * Filter the query on the USR_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByUsrUid('fooValue');   // WHERE USR_UID = 'fooValue'
     * $query->filterByUsrUid('%fooValue%'); // WHERE USR_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $usrUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByUsrUid($usrUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($usrUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $usrUid)) {
                $usrUid = str_replace('*', '%', $usrUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::USR_UID, $usrUid, $comparison);
    }

    /**
     * Filter the query on the PREVIOUS_USR_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByPreviousUsrUid('fooValue');   // WHERE PREVIOUS_USR_UID = 'fooValue'
     * $query->filterByPreviousUsrUid('%fooValue%'); // WHERE PREVIOUS_USR_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $previousUsrUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByPreviousUsrUid($previousUsrUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($previousUsrUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $previousUsrUid)) {
                $previousUsrUid = str_replace('*', '%', $previousUsrUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::PREVIOUS_USR_UID, $previousUsrUid, $comparison);
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
     * @return    AppCacheViewQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppCacheViewPeer::TAS_UID, $tasUid, $comparison);
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
     * @return    AppCacheViewQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppCacheViewPeer::PRO_UID, $proUid, $comparison);
    }

    /**
     * Filter the query on the DEL_DELEGATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByDelDelegateDate('2011-03-14'); // WHERE DEL_DELEGATE_DATE = '2011-03-14'
     * $query->filterByDelDelegateDate('now'); // WHERE DEL_DELEGATE_DATE = '2011-03-14'
     * $query->filterByDelDelegateDate(array('max' => 'yesterday')); // WHERE DEL_DELEGATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $delDelegateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByDelDelegateDate($delDelegateDate = null, $comparison = null)
    {
        if (is_array($delDelegateDate)) {
            $useMinMax = false;
            if (isset($delDelegateDate['min'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_DELEGATE_DATE, $delDelegateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delDelegateDate['max'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_DELEGATE_DATE, $delDelegateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::DEL_DELEGATE_DATE, $delDelegateDate, $comparison);
    }

    /**
     * Filter the query on the DEL_INIT_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByDelInitDate('2011-03-14'); // WHERE DEL_INIT_DATE = '2011-03-14'
     * $query->filterByDelInitDate('now'); // WHERE DEL_INIT_DATE = '2011-03-14'
     * $query->filterByDelInitDate(array('max' => 'yesterday')); // WHERE DEL_INIT_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $delInitDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByDelInitDate($delInitDate = null, $comparison = null)
    {
        if (is_array($delInitDate)) {
            $useMinMax = false;
            if (isset($delInitDate['min'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_INIT_DATE, $delInitDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delInitDate['max'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_INIT_DATE, $delInitDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::DEL_INIT_DATE, $delInitDate, $comparison);
    }

    /**
     * Filter the query on the DEL_TASK_DUE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByDelTaskDueDate('2011-03-14'); // WHERE DEL_TASK_DUE_DATE = '2011-03-14'
     * $query->filterByDelTaskDueDate('now'); // WHERE DEL_TASK_DUE_DATE = '2011-03-14'
     * $query->filterByDelTaskDueDate(array('max' => 'yesterday')); // WHERE DEL_TASK_DUE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $delTaskDueDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByDelTaskDueDate($delTaskDueDate = null, $comparison = null)
    {
        if (is_array($delTaskDueDate)) {
            $useMinMax = false;
            if (isset($delTaskDueDate['min'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_TASK_DUE_DATE, $delTaskDueDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delTaskDueDate['max'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_TASK_DUE_DATE, $delTaskDueDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::DEL_TASK_DUE_DATE, $delTaskDueDate, $comparison);
    }

    /**
     * Filter the query on the DEL_FINISH_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByDelFinishDate('2011-03-14'); // WHERE DEL_FINISH_DATE = '2011-03-14'
     * $query->filterByDelFinishDate('now'); // WHERE DEL_FINISH_DATE = '2011-03-14'
     * $query->filterByDelFinishDate(array('max' => 'yesterday')); // WHERE DEL_FINISH_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $delFinishDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByDelFinishDate($delFinishDate = null, $comparison = null)
    {
        if (is_array($delFinishDate)) {
            $useMinMax = false;
            if (isset($delFinishDate['min'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_FINISH_DATE, $delFinishDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delFinishDate['max'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_FINISH_DATE, $delFinishDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::DEL_FINISH_DATE, $delFinishDate, $comparison);
    }

    /**
     * Filter the query on the DEL_THREAD_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByDelThreadStatus('fooValue');   // WHERE DEL_THREAD_STATUS = 'fooValue'
     * $query->filterByDelThreadStatus('%fooValue%'); // WHERE DEL_THREAD_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $delThreadStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByDelThreadStatus($delThreadStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($delThreadStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $delThreadStatus)) {
                $delThreadStatus = str_replace('*', '%', $delThreadStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::DEL_THREAD_STATUS, $delThreadStatus, $comparison);
    }

    /**
     * Filter the query on the APP_THREAD_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByAppThreadStatus('fooValue');   // WHERE APP_THREAD_STATUS = 'fooValue'
     * $query->filterByAppThreadStatus('%fooValue%'); // WHERE APP_THREAD_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appThreadStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByAppThreadStatus($appThreadStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appThreadStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appThreadStatus)) {
                $appThreadStatus = str_replace('*', '%', $appThreadStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::APP_THREAD_STATUS, $appThreadStatus, $comparison);
    }

    /**
     * Filter the query on the APP_TITLE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppTitle('fooValue');   // WHERE APP_TITLE = 'fooValue'
     * $query->filterByAppTitle('%fooValue%'); // WHERE APP_TITLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appTitle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByAppTitle($appTitle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appTitle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appTitle)) {
                $appTitle = str_replace('*', '%', $appTitle);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::APP_TITLE, $appTitle, $comparison);
    }

    /**
     * Filter the query on the APP_PRO_TITLE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppProTitle('fooValue');   // WHERE APP_PRO_TITLE = 'fooValue'
     * $query->filterByAppProTitle('%fooValue%'); // WHERE APP_PRO_TITLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appProTitle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByAppProTitle($appProTitle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appProTitle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appProTitle)) {
                $appProTitle = str_replace('*', '%', $appProTitle);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::APP_PRO_TITLE, $appProTitle, $comparison);
    }

    /**
     * Filter the query on the APP_TAS_TITLE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppTasTitle('fooValue');   // WHERE APP_TAS_TITLE = 'fooValue'
     * $query->filterByAppTasTitle('%fooValue%'); // WHERE APP_TAS_TITLE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appTasTitle The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByAppTasTitle($appTasTitle = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appTasTitle)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appTasTitle)) {
                $appTasTitle = str_replace('*', '%', $appTasTitle);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::APP_TAS_TITLE, $appTasTitle, $comparison);
    }

    /**
     * Filter the query on the APP_CURRENT_USER column
     *
     * Example usage:
     * <code>
     * $query->filterByAppCurrentUser('fooValue');   // WHERE APP_CURRENT_USER = 'fooValue'
     * $query->filterByAppCurrentUser('%fooValue%'); // WHERE APP_CURRENT_USER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appCurrentUser The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByAppCurrentUser($appCurrentUser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appCurrentUser)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appCurrentUser)) {
                $appCurrentUser = str_replace('*', '%', $appCurrentUser);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::APP_CURRENT_USER, $appCurrentUser, $comparison);
    }

    /**
     * Filter the query on the APP_DEL_PREVIOUS_USER column
     *
     * Example usage:
     * <code>
     * $query->filterByAppDelPreviousUser('fooValue');   // WHERE APP_DEL_PREVIOUS_USER = 'fooValue'
     * $query->filterByAppDelPreviousUser('%fooValue%'); // WHERE APP_DEL_PREVIOUS_USER LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appDelPreviousUser The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByAppDelPreviousUser($appDelPreviousUser = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appDelPreviousUser)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appDelPreviousUser)) {
                $appDelPreviousUser = str_replace('*', '%', $appDelPreviousUser);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::APP_DEL_PREVIOUS_USER, $appDelPreviousUser, $comparison);
    }

    /**
     * Filter the query on the DEL_PRIORITY column
     *
     * Example usage:
     * <code>
     * $query->filterByDelPriority('fooValue');   // WHERE DEL_PRIORITY = 'fooValue'
     * $query->filterByDelPriority('%fooValue%'); // WHERE DEL_PRIORITY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $delPriority The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByDelPriority($delPriority = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($delPriority)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $delPriority)) {
                $delPriority = str_replace('*', '%', $delPriority);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::DEL_PRIORITY, $delPriority, $comparison);
    }

    /**
     * Filter the query on the DEL_DURATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDelDuration(1234); // WHERE DEL_DURATION = 1234
     * $query->filterByDelDuration(array(12, 34)); // WHERE DEL_DURATION IN (12, 34)
     * $query->filterByDelDuration(array('min' => 12)); // WHERE DEL_DURATION > 12
     * </code>
     *
     * @param     mixed $delDuration The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByDelDuration($delDuration = null, $comparison = null)
    {
        if (is_array($delDuration)) {
            $useMinMax = false;
            if (isset($delDuration['min'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_DURATION, $delDuration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delDuration['max'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_DURATION, $delDuration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::DEL_DURATION, $delDuration, $comparison);
    }

    /**
     * Filter the query on the DEL_QUEUE_DURATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDelQueueDuration(1234); // WHERE DEL_QUEUE_DURATION = 1234
     * $query->filterByDelQueueDuration(array(12, 34)); // WHERE DEL_QUEUE_DURATION IN (12, 34)
     * $query->filterByDelQueueDuration(array('min' => 12)); // WHERE DEL_QUEUE_DURATION > 12
     * </code>
     *
     * @param     mixed $delQueueDuration The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByDelQueueDuration($delQueueDuration = null, $comparison = null)
    {
        if (is_array($delQueueDuration)) {
            $useMinMax = false;
            if (isset($delQueueDuration['min'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_QUEUE_DURATION, $delQueueDuration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delQueueDuration['max'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_QUEUE_DURATION, $delQueueDuration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::DEL_QUEUE_DURATION, $delQueueDuration, $comparison);
    }

    /**
     * Filter the query on the DEL_DELAY_DURATION column
     *
     * Example usage:
     * <code>
     * $query->filterByDelDelayDuration(1234); // WHERE DEL_DELAY_DURATION = 1234
     * $query->filterByDelDelayDuration(array(12, 34)); // WHERE DEL_DELAY_DURATION IN (12, 34)
     * $query->filterByDelDelayDuration(array('min' => 12)); // WHERE DEL_DELAY_DURATION > 12
     * </code>
     *
     * @param     mixed $delDelayDuration The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByDelDelayDuration($delDelayDuration = null, $comparison = null)
    {
        if (is_array($delDelayDuration)) {
            $useMinMax = false;
            if (isset($delDelayDuration['min'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_DELAY_DURATION, $delDelayDuration['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delDelayDuration['max'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_DELAY_DURATION, $delDelayDuration['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::DEL_DELAY_DURATION, $delDelayDuration, $comparison);
    }

    /**
     * Filter the query on the DEL_STARTED column
     *
     * Example usage:
     * <code>
     * $query->filterByDelStarted(1234); // WHERE DEL_STARTED = 1234
     * $query->filterByDelStarted(array(12, 34)); // WHERE DEL_STARTED IN (12, 34)
     * $query->filterByDelStarted(array('min' => 12)); // WHERE DEL_STARTED > 12
     * </code>
     *
     * @param     mixed $delStarted The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByDelStarted($delStarted = null, $comparison = null)
    {
        if (is_array($delStarted)) {
            $useMinMax = false;
            if (isset($delStarted['min'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_STARTED, $delStarted['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delStarted['max'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_STARTED, $delStarted['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::DEL_STARTED, $delStarted, $comparison);
    }

    /**
     * Filter the query on the DEL_FINISHED column
     *
     * Example usage:
     * <code>
     * $query->filterByDelFinished(1234); // WHERE DEL_FINISHED = 1234
     * $query->filterByDelFinished(array(12, 34)); // WHERE DEL_FINISHED IN (12, 34)
     * $query->filterByDelFinished(array('min' => 12)); // WHERE DEL_FINISHED > 12
     * </code>
     *
     * @param     mixed $delFinished The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByDelFinished($delFinished = null, $comparison = null)
    {
        if (is_array($delFinished)) {
            $useMinMax = false;
            if (isset($delFinished['min'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_FINISHED, $delFinished['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delFinished['max'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_FINISHED, $delFinished['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::DEL_FINISHED, $delFinished, $comparison);
    }

    /**
     * Filter the query on the DEL_DELAYED column
     *
     * Example usage:
     * <code>
     * $query->filterByDelDelayed(1234); // WHERE DEL_DELAYED = 1234
     * $query->filterByDelDelayed(array(12, 34)); // WHERE DEL_DELAYED IN (12, 34)
     * $query->filterByDelDelayed(array('min' => 12)); // WHERE DEL_DELAYED > 12
     * </code>
     *
     * @param     mixed $delDelayed The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByDelDelayed($delDelayed = null, $comparison = null)
    {
        if (is_array($delDelayed)) {
            $useMinMax = false;
            if (isset($delDelayed['min'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_DELAYED, $delDelayed['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delDelayed['max'])) {
                $this->addUsingAlias(AppCacheViewPeer::DEL_DELAYED, $delDelayed['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::DEL_DELAYED, $delDelayed, $comparison);
    }

    /**
     * Filter the query on the APP_CREATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppCreateDate('2011-03-14'); // WHERE APP_CREATE_DATE = '2011-03-14'
     * $query->filterByAppCreateDate('now'); // WHERE APP_CREATE_DATE = '2011-03-14'
     * $query->filterByAppCreateDate(array('max' => 'yesterday')); // WHERE APP_CREATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $appCreateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByAppCreateDate($appCreateDate = null, $comparison = null)
    {
        if (is_array($appCreateDate)) {
            $useMinMax = false;
            if (isset($appCreateDate['min'])) {
                $this->addUsingAlias(AppCacheViewPeer::APP_CREATE_DATE, $appCreateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appCreateDate['max'])) {
                $this->addUsingAlias(AppCacheViewPeer::APP_CREATE_DATE, $appCreateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::APP_CREATE_DATE, $appCreateDate, $comparison);
    }

    /**
     * Filter the query on the APP_FINISH_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppFinishDate('2011-03-14'); // WHERE APP_FINISH_DATE = '2011-03-14'
     * $query->filterByAppFinishDate('now'); // WHERE APP_FINISH_DATE = '2011-03-14'
     * $query->filterByAppFinishDate(array('max' => 'yesterday')); // WHERE APP_FINISH_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $appFinishDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByAppFinishDate($appFinishDate = null, $comparison = null)
    {
        if (is_array($appFinishDate)) {
            $useMinMax = false;
            if (isset($appFinishDate['min'])) {
                $this->addUsingAlias(AppCacheViewPeer::APP_FINISH_DATE, $appFinishDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appFinishDate['max'])) {
                $this->addUsingAlias(AppCacheViewPeer::APP_FINISH_DATE, $appFinishDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::APP_FINISH_DATE, $appFinishDate, $comparison);
    }

    /**
     * Filter the query on the APP_UPDATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppUpdateDate('2011-03-14'); // WHERE APP_UPDATE_DATE = '2011-03-14'
     * $query->filterByAppUpdateDate('now'); // WHERE APP_UPDATE_DATE = '2011-03-14'
     * $query->filterByAppUpdateDate(array('max' => 'yesterday')); // WHERE APP_UPDATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $appUpdateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByAppUpdateDate($appUpdateDate = null, $comparison = null)
    {
        if (is_array($appUpdateDate)) {
            $useMinMax = false;
            if (isset($appUpdateDate['min'])) {
                $this->addUsingAlias(AppCacheViewPeer::APP_UPDATE_DATE, $appUpdateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appUpdateDate['max'])) {
                $this->addUsingAlias(AppCacheViewPeer::APP_UPDATE_DATE, $appUpdateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::APP_UPDATE_DATE, $appUpdateDate, $comparison);
    }

    /**
     * Filter the query on the APP_OVERDUE_PERCENTAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppOverduePercentage(1234); // WHERE APP_OVERDUE_PERCENTAGE = 1234
     * $query->filterByAppOverduePercentage(array(12, 34)); // WHERE APP_OVERDUE_PERCENTAGE IN (12, 34)
     * $query->filterByAppOverduePercentage(array('min' => 12)); // WHERE APP_OVERDUE_PERCENTAGE > 12
     * </code>
     *
     * @param     mixed $appOverduePercentage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function filterByAppOverduePercentage($appOverduePercentage = null, $comparison = null)
    {
        if (is_array($appOverduePercentage)) {
            $useMinMax = false;
            if (isset($appOverduePercentage['min'])) {
                $this->addUsingAlias(AppCacheViewPeer::APP_OVERDUE_PERCENTAGE, $appOverduePercentage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appOverduePercentage['max'])) {
                $this->addUsingAlias(AppCacheViewPeer::APP_OVERDUE_PERCENTAGE, $appOverduePercentage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppCacheViewPeer::APP_OVERDUE_PERCENTAGE, $appOverduePercentage, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     AppCacheView $appCacheView Object to remove from the list of results
     *
     * @return    AppCacheViewQuery The current query, for fluid interface
     */
    public function prune($appCacheView = null)
    {
        if ($appCacheView) {
            $this->addCond('pruneCond0', $this->getAliasedColName(AppCacheViewPeer::APP_UID), $appCacheView->getAppUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(AppCacheViewPeer::DEL_INDEX), $appCacheView->getDelIndex(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseAppCacheViewQuery