<?php


/**
 * Base class that represents a query for the 'APP_DOCUMENT' table.
 *
 * 
 *
 * @method     AppDocumentQuery orderByAppDocUid($order = Criteria::ASC) Order by the APP_DOC_UID column
 * @method     AppDocumentQuery orderByDocVersion($order = Criteria::ASC) Order by the DOC_VERSION column
 * @method     AppDocumentQuery orderByAppUid($order = Criteria::ASC) Order by the APP_UID column
 * @method     AppDocumentQuery orderByDelIndex($order = Criteria::ASC) Order by the DEL_INDEX column
 * @method     AppDocumentQuery orderByDocUid($order = Criteria::ASC) Order by the DOC_UID column
 * @method     AppDocumentQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 * @method     AppDocumentQuery orderByAppDocType($order = Criteria::ASC) Order by the APP_DOC_TYPE column
 * @method     AppDocumentQuery orderByAppDocCreateDate($order = Criteria::ASC) Order by the APP_DOC_CREATE_DATE column
 * @method     AppDocumentQuery orderByAppDocIndex($order = Criteria::ASC) Order by the APP_DOC_INDEX column
 * @method     AppDocumentQuery orderByFolderUid($order = Criteria::ASC) Order by the FOLDER_UID column
 * @method     AppDocumentQuery orderByAppDocPlugin($order = Criteria::ASC) Order by the APP_DOC_PLUGIN column
 * @method     AppDocumentQuery orderByAppDocTags($order = Criteria::ASC) Order by the APP_DOC_TAGS column
 * @method     AppDocumentQuery orderByAppDocStatus($order = Criteria::ASC) Order by the APP_DOC_STATUS column
 * @method     AppDocumentQuery orderByAppDocStatusDate($order = Criteria::ASC) Order by the APP_DOC_STATUS_DATE column
 * @method     AppDocumentQuery orderByAppDocFieldname($order = Criteria::ASC) Order by the APP_DOC_FIELDNAME column
 *
 * @method     AppDocumentQuery groupByAppDocUid() Group by the APP_DOC_UID column
 * @method     AppDocumentQuery groupByDocVersion() Group by the DOC_VERSION column
 * @method     AppDocumentQuery groupByAppUid() Group by the APP_UID column
 * @method     AppDocumentQuery groupByDelIndex() Group by the DEL_INDEX column
 * @method     AppDocumentQuery groupByDocUid() Group by the DOC_UID column
 * @method     AppDocumentQuery groupByUsrUid() Group by the USR_UID column
 * @method     AppDocumentQuery groupByAppDocType() Group by the APP_DOC_TYPE column
 * @method     AppDocumentQuery groupByAppDocCreateDate() Group by the APP_DOC_CREATE_DATE column
 * @method     AppDocumentQuery groupByAppDocIndex() Group by the APP_DOC_INDEX column
 * @method     AppDocumentQuery groupByFolderUid() Group by the FOLDER_UID column
 * @method     AppDocumentQuery groupByAppDocPlugin() Group by the APP_DOC_PLUGIN column
 * @method     AppDocumentQuery groupByAppDocTags() Group by the APP_DOC_TAGS column
 * @method     AppDocumentQuery groupByAppDocStatus() Group by the APP_DOC_STATUS column
 * @method     AppDocumentQuery groupByAppDocStatusDate() Group by the APP_DOC_STATUS_DATE column
 * @method     AppDocumentQuery groupByAppDocFieldname() Group by the APP_DOC_FIELDNAME column
 *
 * @method     AppDocumentQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     AppDocumentQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     AppDocumentQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     AppDocument findOne(PropelPDO $con = null) Return the first AppDocument matching the query
 * @method     AppDocument findOneOrCreate(PropelPDO $con = null) Return the first AppDocument matching the query, or a new AppDocument object populated from the query conditions when no match is found
 *
 * @method     AppDocument findOneByAppDocUid(string $APP_DOC_UID) Return the first AppDocument filtered by the APP_DOC_UID column
 * @method     AppDocument findOneByDocVersion(int $DOC_VERSION) Return the first AppDocument filtered by the DOC_VERSION column
 * @method     AppDocument findOneByAppUid(string $APP_UID) Return the first AppDocument filtered by the APP_UID column
 * @method     AppDocument findOneByDelIndex(int $DEL_INDEX) Return the first AppDocument filtered by the DEL_INDEX column
 * @method     AppDocument findOneByDocUid(string $DOC_UID) Return the first AppDocument filtered by the DOC_UID column
 * @method     AppDocument findOneByUsrUid(string $USR_UID) Return the first AppDocument filtered by the USR_UID column
 * @method     AppDocument findOneByAppDocType(string $APP_DOC_TYPE) Return the first AppDocument filtered by the APP_DOC_TYPE column
 * @method     AppDocument findOneByAppDocCreateDate(string $APP_DOC_CREATE_DATE) Return the first AppDocument filtered by the APP_DOC_CREATE_DATE column
 * @method     AppDocument findOneByAppDocIndex(int $APP_DOC_INDEX) Return the first AppDocument filtered by the APP_DOC_INDEX column
 * @method     AppDocument findOneByFolderUid(string $FOLDER_UID) Return the first AppDocument filtered by the FOLDER_UID column
 * @method     AppDocument findOneByAppDocPlugin(string $APP_DOC_PLUGIN) Return the first AppDocument filtered by the APP_DOC_PLUGIN column
 * @method     AppDocument findOneByAppDocTags(string $APP_DOC_TAGS) Return the first AppDocument filtered by the APP_DOC_TAGS column
 * @method     AppDocument findOneByAppDocStatus(string $APP_DOC_STATUS) Return the first AppDocument filtered by the APP_DOC_STATUS column
 * @method     AppDocument findOneByAppDocStatusDate(string $APP_DOC_STATUS_DATE) Return the first AppDocument filtered by the APP_DOC_STATUS_DATE column
 * @method     AppDocument findOneByAppDocFieldname(string $APP_DOC_FIELDNAME) Return the first AppDocument filtered by the APP_DOC_FIELDNAME column
 *
 * @method     array findByAppDocUid(string $APP_DOC_UID) Return AppDocument objects filtered by the APP_DOC_UID column
 * @method     array findByDocVersion(int $DOC_VERSION) Return AppDocument objects filtered by the DOC_VERSION column
 * @method     array findByAppUid(string $APP_UID) Return AppDocument objects filtered by the APP_UID column
 * @method     array findByDelIndex(int $DEL_INDEX) Return AppDocument objects filtered by the DEL_INDEX column
 * @method     array findByDocUid(string $DOC_UID) Return AppDocument objects filtered by the DOC_UID column
 * @method     array findByUsrUid(string $USR_UID) Return AppDocument objects filtered by the USR_UID column
 * @method     array findByAppDocType(string $APP_DOC_TYPE) Return AppDocument objects filtered by the APP_DOC_TYPE column
 * @method     array findByAppDocCreateDate(string $APP_DOC_CREATE_DATE) Return AppDocument objects filtered by the APP_DOC_CREATE_DATE column
 * @method     array findByAppDocIndex(int $APP_DOC_INDEX) Return AppDocument objects filtered by the APP_DOC_INDEX column
 * @method     array findByFolderUid(string $FOLDER_UID) Return AppDocument objects filtered by the FOLDER_UID column
 * @method     array findByAppDocPlugin(string $APP_DOC_PLUGIN) Return AppDocument objects filtered by the APP_DOC_PLUGIN column
 * @method     array findByAppDocTags(string $APP_DOC_TAGS) Return AppDocument objects filtered by the APP_DOC_TAGS column
 * @method     array findByAppDocStatus(string $APP_DOC_STATUS) Return AppDocument objects filtered by the APP_DOC_STATUS column
 * @method     array findByAppDocStatusDate(string $APP_DOC_STATUS_DATE) Return AppDocument objects filtered by the APP_DOC_STATUS_DATE column
 * @method     array findByAppDocFieldname(string $APP_DOC_FIELDNAME) Return AppDocument objects filtered by the APP_DOC_FIELDNAME column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAppDocumentQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseAppDocumentQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'AppDocument', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new AppDocumentQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    AppDocumentQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof AppDocumentQuery) {
            return $criteria;
        }
        $query = new AppDocumentQuery();
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
     * @param     array[$APP_DOC_UID, $DOC_VERSION] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    AppDocument|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = AppDocumentPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    AppDocumentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(AppDocumentPeer::APP_DOC_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(AppDocumentPeer::DOC_VERSION, $key[1], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    AppDocumentQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(AppDocumentPeer::APP_DOC_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(AppDocumentPeer::DOC_VERSION, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the APP_DOC_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByAppDocUid('fooValue');   // WHERE APP_DOC_UID = 'fooValue'
     * $query->filterByAppDocUid('%fooValue%'); // WHERE APP_DOC_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appDocUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDocumentQuery The current query, for fluid interface
     */
    public function filterByAppDocUid($appDocUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appDocUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appDocUid)) {
                $appDocUid = str_replace('*', '%', $appDocUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDocumentPeer::APP_DOC_UID, $appDocUid, $comparison);
    }

    /**
     * Filter the query on the DOC_VERSION column
     *
     * Example usage:
     * <code>
     * $query->filterByDocVersion(1234); // WHERE DOC_VERSION = 1234
     * $query->filterByDocVersion(array(12, 34)); // WHERE DOC_VERSION IN (12, 34)
     * $query->filterByDocVersion(array('min' => 12)); // WHERE DOC_VERSION > 12
     * </code>
     *
     * @param     mixed $docVersion The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDocumentQuery The current query, for fluid interface
     */
    public function filterByDocVersion($docVersion = null, $comparison = null)
    {
        if (is_array($docVersion) && null === $comparison) {
            $comparison = Criteria::IN;
        }
        return $this->addUsingAlias(AppDocumentPeer::DOC_VERSION, $docVersion, $comparison);
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
     * @return    AppDocumentQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppDocumentPeer::APP_UID, $appUid, $comparison);
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
     * @return    AppDocumentQuery The current query, for fluid interface
     */
    public function filterByDelIndex($delIndex = null, $comparison = null)
    {
        if (is_array($delIndex)) {
            $useMinMax = false;
            if (isset($delIndex['min'])) {
                $this->addUsingAlias(AppDocumentPeer::DEL_INDEX, $delIndex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($delIndex['max'])) {
                $this->addUsingAlias(AppDocumentPeer::DEL_INDEX, $delIndex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDocumentPeer::DEL_INDEX, $delIndex, $comparison);
    }

    /**
     * Filter the query on the DOC_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByDocUid('fooValue');   // WHERE DOC_UID = 'fooValue'
     * $query->filterByDocUid('%fooValue%'); // WHERE DOC_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $docUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDocumentQuery The current query, for fluid interface
     */
    public function filterByDocUid($docUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($docUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $docUid)) {
                $docUid = str_replace('*', '%', $docUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDocumentPeer::DOC_UID, $docUid, $comparison);
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
     * @return    AppDocumentQuery The current query, for fluid interface
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
        return $this->addUsingAlias(AppDocumentPeer::USR_UID, $usrUid, $comparison);
    }

    /**
     * Filter the query on the APP_DOC_TYPE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppDocType('fooValue');   // WHERE APP_DOC_TYPE = 'fooValue'
     * $query->filterByAppDocType('%fooValue%'); // WHERE APP_DOC_TYPE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appDocType The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDocumentQuery The current query, for fluid interface
     */
    public function filterByAppDocType($appDocType = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appDocType)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appDocType)) {
                $appDocType = str_replace('*', '%', $appDocType);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDocumentPeer::APP_DOC_TYPE, $appDocType, $comparison);
    }

    /**
     * Filter the query on the APP_DOC_CREATE_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppDocCreateDate('2011-03-14'); // WHERE APP_DOC_CREATE_DATE = '2011-03-14'
     * $query->filterByAppDocCreateDate('now'); // WHERE APP_DOC_CREATE_DATE = '2011-03-14'
     * $query->filterByAppDocCreateDate(array('max' => 'yesterday')); // WHERE APP_DOC_CREATE_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $appDocCreateDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDocumentQuery The current query, for fluid interface
     */
    public function filterByAppDocCreateDate($appDocCreateDate = null, $comparison = null)
    {
        if (is_array($appDocCreateDate)) {
            $useMinMax = false;
            if (isset($appDocCreateDate['min'])) {
                $this->addUsingAlias(AppDocumentPeer::APP_DOC_CREATE_DATE, $appDocCreateDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appDocCreateDate['max'])) {
                $this->addUsingAlias(AppDocumentPeer::APP_DOC_CREATE_DATE, $appDocCreateDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDocumentPeer::APP_DOC_CREATE_DATE, $appDocCreateDate, $comparison);
    }

    /**
     * Filter the query on the APP_DOC_INDEX column
     *
     * Example usage:
     * <code>
     * $query->filterByAppDocIndex(1234); // WHERE APP_DOC_INDEX = 1234
     * $query->filterByAppDocIndex(array(12, 34)); // WHERE APP_DOC_INDEX IN (12, 34)
     * $query->filterByAppDocIndex(array('min' => 12)); // WHERE APP_DOC_INDEX > 12
     * </code>
     *
     * @param     mixed $appDocIndex The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDocumentQuery The current query, for fluid interface
     */
    public function filterByAppDocIndex($appDocIndex = null, $comparison = null)
    {
        if (is_array($appDocIndex)) {
            $useMinMax = false;
            if (isset($appDocIndex['min'])) {
                $this->addUsingAlias(AppDocumentPeer::APP_DOC_INDEX, $appDocIndex['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appDocIndex['max'])) {
                $this->addUsingAlias(AppDocumentPeer::APP_DOC_INDEX, $appDocIndex['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDocumentPeer::APP_DOC_INDEX, $appDocIndex, $comparison);
    }

    /**
     * Filter the query on the FOLDER_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByFolderUid('fooValue');   // WHERE FOLDER_UID = 'fooValue'
     * $query->filterByFolderUid('%fooValue%'); // WHERE FOLDER_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $folderUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDocumentQuery The current query, for fluid interface
     */
    public function filterByFolderUid($folderUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($folderUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $folderUid)) {
                $folderUid = str_replace('*', '%', $folderUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDocumentPeer::FOLDER_UID, $folderUid, $comparison);
    }

    /**
     * Filter the query on the APP_DOC_PLUGIN column
     *
     * Example usage:
     * <code>
     * $query->filterByAppDocPlugin('fooValue');   // WHERE APP_DOC_PLUGIN = 'fooValue'
     * $query->filterByAppDocPlugin('%fooValue%'); // WHERE APP_DOC_PLUGIN LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appDocPlugin The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDocumentQuery The current query, for fluid interface
     */
    public function filterByAppDocPlugin($appDocPlugin = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appDocPlugin)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appDocPlugin)) {
                $appDocPlugin = str_replace('*', '%', $appDocPlugin);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDocumentPeer::APP_DOC_PLUGIN, $appDocPlugin, $comparison);
    }

    /**
     * Filter the query on the APP_DOC_TAGS column
     *
     * Example usage:
     * <code>
     * $query->filterByAppDocTags('fooValue');   // WHERE APP_DOC_TAGS = 'fooValue'
     * $query->filterByAppDocTags('%fooValue%'); // WHERE APP_DOC_TAGS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appDocTags The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDocumentQuery The current query, for fluid interface
     */
    public function filterByAppDocTags($appDocTags = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appDocTags)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appDocTags)) {
                $appDocTags = str_replace('*', '%', $appDocTags);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDocumentPeer::APP_DOC_TAGS, $appDocTags, $comparison);
    }

    /**
     * Filter the query on the APP_DOC_STATUS column
     *
     * Example usage:
     * <code>
     * $query->filterByAppDocStatus('fooValue');   // WHERE APP_DOC_STATUS = 'fooValue'
     * $query->filterByAppDocStatus('%fooValue%'); // WHERE APP_DOC_STATUS LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appDocStatus The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDocumentQuery The current query, for fluid interface
     */
    public function filterByAppDocStatus($appDocStatus = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appDocStatus)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appDocStatus)) {
                $appDocStatus = str_replace('*', '%', $appDocStatus);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDocumentPeer::APP_DOC_STATUS, $appDocStatus, $comparison);
    }

    /**
     * Filter the query on the APP_DOC_STATUS_DATE column
     *
     * Example usage:
     * <code>
     * $query->filterByAppDocStatusDate('2011-03-14'); // WHERE APP_DOC_STATUS_DATE = '2011-03-14'
     * $query->filterByAppDocStatusDate('now'); // WHERE APP_DOC_STATUS_DATE = '2011-03-14'
     * $query->filterByAppDocStatusDate(array('max' => 'yesterday')); // WHERE APP_DOC_STATUS_DATE > '2011-03-13'
     * </code>
     *
     * @param     mixed $appDocStatusDate The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDocumentQuery The current query, for fluid interface
     */
    public function filterByAppDocStatusDate($appDocStatusDate = null, $comparison = null)
    {
        if (is_array($appDocStatusDate)) {
            $useMinMax = false;
            if (isset($appDocStatusDate['min'])) {
                $this->addUsingAlias(AppDocumentPeer::APP_DOC_STATUS_DATE, $appDocStatusDate['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($appDocStatusDate['max'])) {
                $this->addUsingAlias(AppDocumentPeer::APP_DOC_STATUS_DATE, $appDocStatusDate['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }
        }
        return $this->addUsingAlias(AppDocumentPeer::APP_DOC_STATUS_DATE, $appDocStatusDate, $comparison);
    }

    /**
     * Filter the query on the APP_DOC_FIELDNAME column
     *
     * Example usage:
     * <code>
     * $query->filterByAppDocFieldname('fooValue');   // WHERE APP_DOC_FIELDNAME = 'fooValue'
     * $query->filterByAppDocFieldname('%fooValue%'); // WHERE APP_DOC_FIELDNAME LIKE '%fooValue%'
     * </code>
     *
     * @param     string $appDocFieldname The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    AppDocumentQuery The current query, for fluid interface
     */
    public function filterByAppDocFieldname($appDocFieldname = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($appDocFieldname)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $appDocFieldname)) {
                $appDocFieldname = str_replace('*', '%', $appDocFieldname);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(AppDocumentPeer::APP_DOC_FIELDNAME, $appDocFieldname, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     AppDocument $appDocument Object to remove from the list of results
     *
     * @return    AppDocumentQuery The current query, for fluid interface
     */
    public function prune($appDocument = null)
    {
        if ($appDocument) {
            $this->addCond('pruneCond0', $this->getAliasedColName(AppDocumentPeer::APP_DOC_UID), $appDocument->getAppDocUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(AppDocumentPeer::DOC_VERSION), $appDocument->getDocVersion(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseAppDocumentQuery