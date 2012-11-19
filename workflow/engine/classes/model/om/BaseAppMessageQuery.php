<?php


/**
 * Base class that represents a query for the 'APP_MESSAGE' table.
 *
 * 
 *
 * @method     AppMessageQuery orderByAppMsgUid($order = Criteria::ASC) Order by the APP_MSG_UID column
 * @method     AppMessageQuery orderByMsgUid($order = Criteria::ASC) Order by the MSG_UID column
 * @method     AppMessageQuery orderByAppUid($order = Criteria::ASC) Order by the APP_UID column
 * @method     AppMessageQuery orderByDelIndex($order = Criteria::ASC) Order by the DEL_INDEX column
 * @method     AppMessageQuery orderByAppMsgType($order = Criteria::ASC) Order by the APP_MSG_TYPE column
 * @method     AppMessageQuery orderByAppMsgSubject($order = Criteria::ASC) Order by the APP_MSG_SUBJECT column
 * @method     AppMessageQuery orderByAppMsgFrom($order = Criteria::ASC) Order by the APP_MSG_FROM column
 * @method     AppMessageQuery orderByAppMsgTo($order = Criteria::ASC) Order by the APP_MSG_TO column
 * @method     AppMessageQuery orderByAppMsgBody($order = Criteria::ASC) Order by the APP_MSG_BODY column
 * @method     AppMessageQuery orderByAppMsgDate($order = Criteria::ASC) Order by the APP_MSG_DATE column
 * @method     AppMessageQuery orderByAppMsgCc($order = Criteria::ASC) Order by the APP_MSG_CC column
 * @method     AppMessageQuery orderByAppMsgBcc($order = Criteria::ASC) Order by the APP_MSG_BCC column
 * @method     AppMessageQuery orderByAppMsgTemplate($order = Criteria::ASC) Order by the APP_MSG_TEMPLATE column
 * @method     AppMessageQuery orderByAppMsgStatus($order = Criteria::ASC) Order by the APP_MSG_STATUS column
 * @method     AppMessageQuery orderByAppMsgAttach($order = Criteria::ASC) Order by the APP_MSG_ATTACH column
 * @method     AppMessageQuery orderByAppMsgSendDate($order = Criteria::ASC) Order by the APP_MSG_SEND_DATE column
 * @method     AppMessageQuery orderByAppMsgShowMessage($order = Criteria::ASC) Order by the APP_MSG_SHOW_MESSAGE column
 *
 * @method     AppMessageQuery groupByAppMsgUid() Group by the APP_MSG_UID column
 * @method     AppMessageQuery groupByMsgUid() Group by the MSG_UID column
 * @method     AppMessageQuery groupByAppUid() Group by the APP_UID column
 * @method     AppMessageQuery groupByDelIndex() Group by the DEL_INDEX column
 * @method     AppMessageQuery groupByAppMsgType() Group by the APP_MSG_TYPE column
 * @method     AppMessageQuery groupByAppMsgSubject() Group by the APP_MSG_SUBJECT column
 * @method     AppMessageQuery groupByAppMsgFrom() Group by the APP_MSG_FROM column
 * @method     AppMessageQuery groupByAppMsgTo() Group by the APP_MSG_TO column
 * @method     AppMessageQuery groupByAppMsgBody() Group by the APP_MSG_BODY column
 * @method     AppMessageQuery groupByAppMsgDate() Group by the APP_MSG_DATE column
 * @method     AppMessageQuery groupByAppMsgCc() Group by the APP_MSG_CC column
 * @method     AppMessageQuery groupByAppMsgBcc() Group by the APP_MSG_BCC column
 * @method     AppMessageQuery groupByAppMsgTemplate() Group by the APP_MSG_TEMPLATE column
 * @method     AppMessageQuery groupByAppMsgStatus() Group by the APP_MSG_STATUS column
 * @method     AppMessageQuery groupByAppMsgAttach() Group by the APP_MSG_ATTACH column
 * @method     AppMessageQuery groupByAppMsgSendDate() Group by the APP_MSG_SEND_DATE column
 * @method     AppMessageQuery groupByAppMsgShowMessage() Group by the APP_MSG_SHOW_MESSAGE column
 *
 * @method     AppMessageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AppMessageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AppMessageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AppMessage findOne(PropelPDO $con = null) Return the first AppMessage matching the query
 * @method     AppMessage findOneOrCreate(PropelPDO $con = null) Return the first AppMessage matching the query, or a new AppMessage object populated from the query conditions when no match is found
 *
 * @method     AppMessage findOneByAppMsgUid(string $APP_MSG_UID) Return the first AppMessage filtered by the APP_MSG_UID column
 * @method     AppMessage findOneByMsgUid(string $MSG_UID) Return the first AppMessage filtered by the MSG_UID column
 * @method     AppMessage findOneByAppUid(string $APP_UID) Return the first AppMessage filtered by the APP_UID column
 * @method     AppMessage findOneByDelIndex(int $DEL_INDEX) Return the first AppMessage filtered by the DEL_INDEX column
 * @method     AppMessage findOneByAppMsgType(string $APP_MSG_TYPE) Return the first AppMessage filtered by the APP_MSG_TYPE column
 * @method     AppMessage findOneByAppMsgSubject(string $APP_MSG_SUBJECT) Return the first AppMessage filtered by the APP_MSG_SUBJECT column
 * @method     AppMessage findOneByAppMsgFrom(string $APP_MSG_FROM) Return the first AppMessage filtered by the APP_MSG_FROM column
 * @method     AppMessage findOneByAppMsgTo(string $APP_MSG_TO) Return the first AppMessage filtered by the APP_MSG_TO column
 * @method     AppMessage findOneByAppMsgBody(string $APP_MSG_BODY) Return the first AppMessage filtered by the APP_MSG_BODY column
 * @method     AppMessage findOneByAppMsgDate(string $APP_MSG_DATE) Return the first AppMessage filtered by the APP_MSG_DATE column
 * @method     AppMessage findOneByAppMsgCc(string $APP_MSG_CC) Return the first AppMessage filtered by the APP_MSG_CC column
 * @method     AppMessage findOneByAppMsgBcc(string $APP_MSG_BCC) Return the first AppMessage filtered by the APP_MSG_BCC column
 * @method     AppMessage findOneByAppMsgTemplate(string $APP_MSG_TEMPLATE) Return the first AppMessage filtered by the APP_MSG_TEMPLATE column
 * @method     AppMessage findOneByAppMsgStatus(string $APP_MSG_STATUS) Return the first AppMessage filtered by the APP_MSG_STATUS column
 * @method     AppMessage findOneByAppMsgAttach(string $APP_MSG_ATTACH) Return the first AppMessage filtered by the APP_MSG_ATTACH column
 * @method     AppMessage findOneByAppMsgSendDate(string $APP_MSG_SEND_DATE) Return the first AppMessage filtered by the APP_MSG_SEND_DATE column
 * @method     AppMessage findOneByAppMsgShowMessage(int $APP_MSG_SHOW_MESSAGE) Return the first AppMessage filtered by the APP_MSG_SHOW_MESSAGE column
 *
 * @method     array findByAppMsgUid(string $APP_MSG_UID) Return AppMessage objects filtered by the APP_MSG_UID column
 * @method     array findByMsgUid(string $MSG_UID) Return AppMessage objects filtered by the MSG_UID column
 * @method     array findByAppUid(string $APP_UID) Return AppMessage objects filtered by the APP_UID column
 * @method     array findByDelIndex(int $DEL_INDEX) Return AppMessage objects filtered by the DEL_INDEX column
 * @method     array findByAppMsgType(string $APP_MSG_TYPE) Return AppMessage objects filtered by the APP_MSG_TYPE column
 * @method     array findByAppMsgSubject(string $APP_MSG_SUBJECT) Return AppMessage objects filtered by the APP_MSG_SUBJECT column
 * @method     array findByAppMsgFrom(string $APP_MSG_FROM) Return AppMessage objects filtered by the APP_MSG_FROM column
 * @method     array findByAppMsgTo(string $APP_MSG_TO) Return AppMessage objects filtered by the APP_MSG_TO column
 * @method     array findByAppMsgBody(string $APP_MSG_BODY) Return AppMessage objects filtered by the APP_MSG_BODY column
 * @method     array findByAppMsgDate(string $APP_MSG_DATE) Return AppMessage objects filtered by the APP_MSG_DATE column
 * @method     array findByAppMsgCc(string $APP_MSG_CC) Return AppMessage objects filtered by the APP_MSG_CC column
 * @method     array findByAppMsgBcc(string $APP_MSG_BCC) Return AppMessage objects filtered by the APP_MSG_BCC column
 * @method     array findByAppMsgTemplate(string $APP_MSG_TEMPLATE) Return AppMessage objects filtered by the APP_MSG_TEMPLATE column
 * @method     array findByAppMsgStatus(string $APP_MSG_STATUS) Return AppMessage objects filtered by the APP_MSG_STATUS column
 * @method     array findByAppMsgAttach(string $APP_MSG_ATTACH) Return AppMessage objects filtered by the APP_MSG_ATTACH column
 * @method     array findByAppMsgSendDate(string $APP_MSG_SEND_DATE) Return AppMessage objects filtered by the APP_MSG_SEND_DATE column
 * @method     array findByAppMsgShowMessage(int $APP_MSG_SHOW_MESSAGE) Return AppMessage objects filtered by the APP_MSG_SHOW_MESSAGE column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppMessageQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAppMessageQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'AppMessage', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AppMessageQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    AppMessageQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AppMessageQuery) {
            return $criteria;
        }
        $query = new AppMessageQuery();
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
     * @return    AppMessage|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = AppMessagePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        return $this->addUsingAlias(AppMessagePeer::APP_MSG_UID, $key, Criteria::EQUAL);
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        return $this->addUsingAlias(AppMessagePeer::APP_MSG_UID, $keys, Criteria::IN);
    }

    /**
     * Filter the query on the APP_MSG_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByAppMsgUid('fooValue');   // WHERE APP_MSG_UID = 'fooValue'
     * $query->filterByAppMsgUid('%fooValue%'); // WHERE APP_MSG_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appMsgUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByAppMsgUid($appMsgUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appMsgUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appMsgUid)) {
                $appMsgUid = str_replace('*', '%', $appMsgUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppMessagePeer::APP_MSG_UID, $appMsgUid, $comparison);
    }

    /**
     * Filter the query on the MSG_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByMsgUid('fooValue');   // WHERE MSG_UID = 'fooValue'
     * $query->filterByMsgUid('%fooValue%'); // WHERE MSG_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $msgUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByMsgUid($msgUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($msgUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $msgUid)) {
                $msgUid = str_replace('*', '%', $msgUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppMessagePeer::MSG_UID, $msgUid, $comparison);
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
     * @return    AppMessageQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppMessagePeer::APP_UID, $appUid, $comparison);
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
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByDelIndex($delIndex = null, $comparison = null)
    {
        if (is_array($delIndex)) {
            $useMinMax = false;
            if (isset($delIndex['min'])) {
                $this->addUsingAlias(AppMessagePeer::DEL_INDEX, $delIndex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delIndex['max'])) {
                $this->addUsingAlias(AppMessagePeer::DEL_INDEX, $delIndex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppMessagePeer::DEL_INDEX, $delIndex, $comparison);
    }

    /**
     * Filter the query on the APP_MSG_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppMsgType('fooValue');   // WHERE APP_MSG_TYPE = 'fooValue'
     * $query->filterByAppMsgType('%fooValue%'); // WHERE APP_MSG_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appMsgType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByAppMsgType($appMsgType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appMsgType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appMsgType)) {
                $appMsgType = str_replace('*', '%', $appMsgType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppMessagePeer::APP_MSG_TYPE, $appMsgType, $comparison);
    }

    /**
     * Filter the query on the APP_MSG_SUBJECT column
     *
     * Example usage:
     * <code>
     * $query->filterByAppMsgSubject('fooValue');   // WHERE APP_MSG_SUBJECT = 'fooValue'
     * $query->filterByAppMsgSubject('%fooValue%'); // WHERE APP_MSG_SUBJECT LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appMsgSubject The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByAppMsgSubject($appMsgSubject = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appMsgSubject)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appMsgSubject)) {
                $appMsgSubject = str_replace('*', '%', $appMsgSubject);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppMessagePeer::APP_MSG_SUBJECT, $appMsgSubject, $comparison);
    }

    /**
     * Filter the query on the APP_MSG_FROM column
     *
     * Example usage:
     * <code>
     * $query->filterByAppMsgFrom('fooValue');   // WHERE APP_MSG_FROM = 'fooValue'
     * $query->filterByAppMsgFrom('%fooValue%'); // WHERE APP_MSG_FROM LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appMsgFrom The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByAppMsgFrom($appMsgFrom = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appMsgFrom)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appMsgFrom)) {
                $appMsgFrom = str_replace('*', '%', $appMsgFrom);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppMessagePeer::APP_MSG_FROM, $appMsgFrom, $comparison);
    }

    /**
     * Filter the query on the APP_MSG_TO column
     *
     * Example usage:
     * <code>
     * $query->filterByAppMsgTo('fooValue');   // WHERE APP_MSG_TO = 'fooValue'
     * $query->filterByAppMsgTo('%fooValue%'); // WHERE APP_MSG_TO LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appMsgTo The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByAppMsgTo($appMsgTo = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appMsgTo)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appMsgTo)) {
                $appMsgTo = str_replace('*', '%', $appMsgTo);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppMessagePeer::APP_MSG_TO, $appMsgTo, $comparison);
    }

    /**
     * Filter the query on the APP_MSG_BODY column
     *
     * Example usage:
     * <code>
     * $query->filterByAppMsgBody('fooValue');   // WHERE APP_MSG_BODY = 'fooValue'
     * $query->filterByAppMsgBody('%fooValue%'); // WHERE APP_MSG_BODY LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appMsgBody The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByAppMsgBody($appMsgBody = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appMsgBody)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appMsgBody)) {
                $appMsgBody = str_replace('*', '%', $appMsgBody);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppMessagePeer::APP_MSG_BODY, $appMsgBody, $comparison);
    }

    /**
     * Filter the query on the APP_MSG_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppMsgDate('2011-03-14'); // WHERE APP_MSG_DATE = '2011-03-14'
     * $query->filterByAppMsgDate('now'); // WHERE APP_MSG_DATE = '2011-03-14'
     * $query->filterByAppMsgDate(array('max' => 'yesterday')); // WHERE APP_MSG_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $appMsgDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByAppMsgDate($appMsgDate = null, $comparison = null)
    {
        if (is_array($appMsgDate)) {
            $useMinMax = false;
            if (isset($appMsgDate['min'])) {
                $this->addUsingAlias(AppMessagePeer::APP_MSG_DATE, $appMsgDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appMsgDate['max'])) {
                $this->addUsingAlias(AppMessagePeer::APP_MSG_DATE, $appMsgDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppMessagePeer::APP_MSG_DATE, $appMsgDate, $comparison);
    }

    /**
     * Filter the query on the APP_MSG_CC column
     *
     * Example usage:
     * <code>
     * $query->filterByAppMsgCc('fooValue');   // WHERE APP_MSG_CC = 'fooValue'
     * $query->filterByAppMsgCc('%fooValue%'); // WHERE APP_MSG_CC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appMsgCc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByAppMsgCc($appMsgCc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appMsgCc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appMsgCc)) {
                $appMsgCc = str_replace('*', '%', $appMsgCc);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppMessagePeer::APP_MSG_CC, $appMsgCc, $comparison);
    }

    /**
     * Filter the query on the APP_MSG_BCC column
     *
     * Example usage:
     * <code>
     * $query->filterByAppMsgBcc('fooValue');   // WHERE APP_MSG_BCC = 'fooValue'
     * $query->filterByAppMsgBcc('%fooValue%'); // WHERE APP_MSG_BCC LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appMsgBcc The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByAppMsgBcc($appMsgBcc = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appMsgBcc)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appMsgBcc)) {
                $appMsgBcc = str_replace('*', '%', $appMsgBcc);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppMessagePeer::APP_MSG_BCC, $appMsgBcc, $comparison);
    }

    /**
     * Filter the query on the APP_MSG_TEMPLATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppMsgTemplate('fooValue');   // WHERE APP_MSG_TEMPLATE = 'fooValue'
     * $query->filterByAppMsgTemplate('%fooValue%'); // WHERE APP_MSG_TEMPLATE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appMsgTemplate The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByAppMsgTemplate($appMsgTemplate = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appMsgTemplate)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appMsgTemplate)) {
                $appMsgTemplate = str_replace('*', '%', $appMsgTemplate);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppMessagePeer::APP_MSG_TEMPLATE, $appMsgTemplate, $comparison);
    }

    /**
     * Filter the query on the APP_MSG_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByAppMsgStatus('fooValue');   // WHERE APP_MSG_STATUS = 'fooValue'
     * $query->filterByAppMsgStatus('%fooValue%'); // WHERE APP_MSG_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appMsgStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByAppMsgStatus($appMsgStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appMsgStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appMsgStatus)) {
                $appMsgStatus = str_replace('*', '%', $appMsgStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppMessagePeer::APP_MSG_STATUS, $appMsgStatus, $comparison);
    }

    /**
     * Filter the query on the APP_MSG_ATTACH column
     *
     * Example usage:
     * <code>
     * $query->filterByAppMsgAttach('fooValue');   // WHERE APP_MSG_ATTACH = 'fooValue'
     * $query->filterByAppMsgAttach('%fooValue%'); // WHERE APP_MSG_ATTACH LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appMsgAttach The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByAppMsgAttach($appMsgAttach = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appMsgAttach)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appMsgAttach)) {
                $appMsgAttach = str_replace('*', '%', $appMsgAttach);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppMessagePeer::APP_MSG_ATTACH, $appMsgAttach, $comparison);
    }

    /**
     * Filter the query on the APP_MSG_SEND_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppMsgSendDate('2011-03-14'); // WHERE APP_MSG_SEND_DATE = '2011-03-14'
     * $query->filterByAppMsgSendDate('now'); // WHERE APP_MSG_SEND_DATE = '2011-03-14'
     * $query->filterByAppMsgSendDate(array('max' => 'yesterday')); // WHERE APP_MSG_SEND_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $appMsgSendDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByAppMsgSendDate($appMsgSendDate = null, $comparison = null)
    {
        if (is_array($appMsgSendDate)) {
            $useMinMax = false;
            if (isset($appMsgSendDate['min'])) {
                $this->addUsingAlias(AppMessagePeer::APP_MSG_SEND_DATE, $appMsgSendDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appMsgSendDate['max'])) {
                $this->addUsingAlias(AppMessagePeer::APP_MSG_SEND_DATE, $appMsgSendDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppMessagePeer::APP_MSG_SEND_DATE, $appMsgSendDate, $comparison);
    }

    /**
     * Filter the query on the APP_MSG_SHOW_MESSAGE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppMsgShowMessage(1234); // WHERE APP_MSG_SHOW_MESSAGE = 1234
     * $query->filterByAppMsgShowMessage(array(12, 34)); // WHERE APP_MSG_SHOW_MESSAGE IN (12, 34)
     * $query->filterByAppMsgShowMessage(array('min' => 12)); // WHERE APP_MSG_SHOW_MESSAGE > 12
     * </code>
     *
     * @param     mixed $appMsgShowMessage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function filterByAppMsgShowMessage($appMsgShowMessage = null, $comparison = null)
    {
        if (is_array($appMsgShowMessage)) {
            $useMinMax = false;
            if (isset($appMsgShowMessage['min'])) {
                $this->addUsingAlias(AppMessagePeer::APP_MSG_SHOW_MESSAGE, $appMsgShowMessage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appMsgShowMessage['max'])) {
                $this->addUsingAlias(AppMessagePeer::APP_MSG_SHOW_MESSAGE, $appMsgShowMessage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppMessagePeer::APP_MSG_SHOW_MESSAGE, $appMsgShowMessage, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     AppMessage $appMessage Object to remove from the list of results
     *
     * @return    AppMessageQuery The current query, for fluid interface
     */
    public function prune($appMessage = null)
    {
        if ($appMessage) {
            $this->addUsingAlias(AppMessagePeer::APP_MSG_UID, $appMessage->getAppMsgUid(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

} // BaseAppMessageQuery