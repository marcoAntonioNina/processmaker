<?php


/**
 * Base class that represents a query for the 'CONFIGURATION' table.
 *
 * 
 *
 * @method     ConfigurationQuery orderByCfgUid($order = Criteria::ASC) Order by the CFG_UID column
 * @method     ConfigurationQuery orderByObjUid($order = Criteria::ASC) Order by the OBJ_UID column
 * @method     ConfigurationQuery orderByCfgValue($order = Criteria::ASC) Order by the CFG_VALUE column
 * @method     ConfigurationQuery orderByProUid($order = Criteria::ASC) Order by the PRO_UID column
 * @method     ConfigurationQuery orderByUsrUid($order = Criteria::ASC) Order by the USR_UID column
 * @method     ConfigurationQuery orderByAppUid($order = Criteria::ASC) Order by the APP_UID column
 *
 * @method     ConfigurationQuery groupByCfgUid() Group by the CFG_UID column
 * @method     ConfigurationQuery groupByObjUid() Group by the OBJ_UID column
 * @method     ConfigurationQuery groupByCfgValue() Group by the CFG_VALUE column
 * @method     ConfigurationQuery groupByProUid() Group by the PRO_UID column
 * @method     ConfigurationQuery groupByUsrUid() Group by the USR_UID column
 * @method     ConfigurationQuery groupByAppUid() Group by the APP_UID column
 *
 * @method     ConfigurationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ConfigurationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ConfigurationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     Configuration findOne(PropelPDO $con = null) Return the first Configuration matching the query
 * @method     Configuration findOneOrCreate(PropelPDO $con = null) Return the first Configuration matching the query, or a new Configuration object populated from the query conditions when no match is found
 *
 * @method     Configuration findOneByCfgUid(string $CFG_UID) Return the first Configuration filtered by the CFG_UID column
 * @method     Configuration findOneByObjUid(string $OBJ_UID) Return the first Configuration filtered by the OBJ_UID column
 * @method     Configuration findOneByCfgValue(string $CFG_VALUE) Return the first Configuration filtered by the CFG_VALUE column
 * @method     Configuration findOneByProUid(string $PRO_UID) Return the first Configuration filtered by the PRO_UID column
 * @method     Configuration findOneByUsrUid(string $USR_UID) Return the first Configuration filtered by the USR_UID column
 * @method     Configuration findOneByAppUid(string $APP_UID) Return the first Configuration filtered by the APP_UID column
 *
 * @method     array findByCfgUid(string $CFG_UID) Return Configuration objects filtered by the CFG_UID column
 * @method     array findByObjUid(string $OBJ_UID) Return Configuration objects filtered by the OBJ_UID column
 * @method     array findByCfgValue(string $CFG_VALUE) Return Configuration objects filtered by the CFG_VALUE column
 * @method     array findByProUid(string $PRO_UID) Return Configuration objects filtered by the PRO_UID column
 * @method     array findByUsrUid(string $USR_UID) Return Configuration objects filtered by the USR_UID column
 * @method     array findByAppUid(string $APP_UID) Return Configuration objects filtered by the APP_UID column
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseConfigurationQuery extends ModelCriteria
{
    
    /**
     * Initializes internal state of BaseConfigurationQuery object.
     *
     * @param     string $dbName The dabase name
     * @param     string $modelName The phpName of a model, e.g. 'Book'
     * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'workflow', $modelName = 'Configuration', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ConfigurationQuery object.
     *
     * @param     string $modelAlias The alias of a model in the query
     * @param     Criteria $criteria Optional Criteria to build the query from
     *
     * @return    ConfigurationQuery
     */
    public static function create($modelAlias = null, $criteria = null)
    {
        if ($criteria instanceof ConfigurationQuery) {
            return $criteria;
        }
        $query = new ConfigurationQuery();
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
     * $obj = $c->findPk(array(12, 34, 56, 78, 91), $con);
     * </code>
     * @param     array[$CFG_UID, $OBJ_UID, $PRO_UID, $USR_UID, $APP_UID] $key Primary key to use for the query
     * @param     PropelPDO $con an optional connection object
     *
     * @return    Configuration|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, $con = null)
    {
        if ((null !== ($obj = ConfigurationPeer::getInstanceFromPool(serialize(array((string) $key[0], (string) $key[1], (string) $key[2], (string) $key[3], (string) $key[4]))))) && $this->getFormatter()->isObjectFormatter()) {
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
     * @return    ConfigurationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {
        $this->addUsingAlias(ConfigurationPeer::CFG_UID, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(ConfigurationPeer::OBJ_UID, $key[1], Criteria::EQUAL);
        $this->addUsingAlias(ConfigurationPeer::PRO_UID, $key[2], Criteria::EQUAL);
        $this->addUsingAlias(ConfigurationPeer::USR_UID, $key[3], Criteria::EQUAL);
        $this->addUsingAlias(ConfigurationPeer::APP_UID, $key[4], Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param     array $keys The list of primary key to use for the query
     *
     * @return    ConfigurationQuery The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {
        if (empty($keys)) {
            return $this->add(null, '1<>1', Criteria::CUSTOM);
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(ConfigurationPeer::CFG_UID, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(ConfigurationPeer::OBJ_UID, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $cton2 = $this->getNewCriterion(ConfigurationPeer::PRO_UID, $key[2], Criteria::EQUAL);
            $cton0->addAnd($cton2);
            $cton3 = $this->getNewCriterion(ConfigurationPeer::USR_UID, $key[3], Criteria::EQUAL);
            $cton0->addAnd($cton3);
            $cton4 = $this->getNewCriterion(ConfigurationPeer::APP_UID, $key[4], Criteria::EQUAL);
            $cton0->addAnd($cton4);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Filter the query on the CFG_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByCfgUid('fooValue');   // WHERE CFG_UID = 'fooValue'
     * $query->filterByCfgUid('%fooValue%'); // WHERE CFG_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cfgUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ConfigurationQuery The current query, for fluid interface
     */
    public function filterByCfgUid($cfgUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cfgUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cfgUid)) {
                $cfgUid = str_replace('*', '%', $cfgUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ConfigurationPeer::CFG_UID, $cfgUid, $comparison);
    }

    /**
     * Filter the query on the OBJ_UID column
     *
     * Example usage:
     * <code>
     * $query->filterByObjUid('fooValue');   // WHERE OBJ_UID = 'fooValue'
     * $query->filterByObjUid('%fooValue%'); // WHERE OBJ_UID LIKE '%fooValue%'
     * </code>
     *
     * @param     string $objUid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ConfigurationQuery The current query, for fluid interface
     */
    public function filterByObjUid($objUid = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($objUid)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $objUid)) {
                $objUid = str_replace('*', '%', $objUid);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ConfigurationPeer::OBJ_UID, $objUid, $comparison);
    }

    /**
     * Filter the query on the CFG_VALUE column
     *
     * Example usage:
     * <code>
     * $query->filterByCfgValue('fooValue');   // WHERE CFG_VALUE = 'fooValue'
     * $query->filterByCfgValue('%fooValue%'); // WHERE CFG_VALUE LIKE '%fooValue%'
     * </code>
     *
     * @param     string $cfgValue The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE)
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return    ConfigurationQuery The current query, for fluid interface
     */
    public function filterByCfgValue($cfgValue = null, $comparison = null)
    {
        if (null === $comparison) {
            if (is_array($cfgValue)) {
                $comparison = Criteria::IN;
            } elseif (preg_match('/[\%\*]/', $cfgValue)) {
                $cfgValue = str_replace('*', '%', $cfgValue);
                $comparison = Criteria::LIKE;
            }
        }
        return $this->addUsingAlias(ConfigurationPeer::CFG_VALUE, $cfgValue, $comparison);
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
     * @return    ConfigurationQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ConfigurationPeer::PRO_UID, $proUid, $comparison);
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
     * @return    ConfigurationQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ConfigurationPeer::USR_UID, $usrUid, $comparison);
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
     * @return    ConfigurationQuery The current query, for fluid interface
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
        return $this->addUsingAlias(ConfigurationPeer::APP_UID, $appUid, $comparison);
    }

    /**
     * Exclude object from result
     *
     * @param     Configuration $configuration Object to remove from the list of results
     *
     * @return    ConfigurationQuery The current query, for fluid interface
     */
    public function prune($configuration = null)
    {
        if ($configuration) {
            $this->addCond('pruneCond0', $this->getAliasedColName(ConfigurationPeer::CFG_UID), $configuration->getCfgUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(ConfigurationPeer::OBJ_UID), $configuration->getObjUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond2', $this->getAliasedColName(ConfigurationPeer::PRO_UID), $configuration->getProUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond3', $this->getAliasedColName(ConfigurationPeer::USR_UID), $configuration->getUsrUid(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond4', $this->getAliasedColName(ConfigurationPeer::APP_UID), $configuration->getAppUid(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1', 'pruneCond2', 'pruneCond3', 'pruneCond4'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

} // BaseConfigurationQuery