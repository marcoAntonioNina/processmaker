<?php


require_once 'propel/om/BaseObject.php';
require_once 'propel/om/Persistent.php';

include_once 'propel/query/Criteria.php';
include_once 'classes/model/DbSourcePeer.php';

/**
 * Base class that represents a row from the 'DB_SOURCE' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseDbSource extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'DbSourcePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        DbSourcePeer
	 */
	protected static $peer;

	/**
	 * The value for the dbs_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $dbs_uid;

	/**
	 * The value for the pro_uid field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $pro_uid;

	/**
	 * The value for the dbs_type field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $dbs_type;

	/**
	 * The value for the dbs_server field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $dbs_server;

	/**
	 * The value for the dbs_database_name field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $dbs_database_name;

	/**
	 * The value for the dbs_username field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $dbs_username;

	/**
	 * The value for the dbs_password field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $dbs_password;

	/**
	 * The value for the dbs_port field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $dbs_port;

	/**
	 * The value for the dbs_encode field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $dbs_encode;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
		$this->dbs_uid = '';
		$this->pro_uid = '0';
		$this->dbs_type = '0';
		$this->dbs_server = '0';
		$this->dbs_database_name = '0';
		$this->dbs_username = '0';
		$this->dbs_password = '';
		$this->dbs_port = 0;
		$this->dbs_encode = '';
	}

	/**
	 * Initializes internal state of BaseDbSource object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [dbs_uid] column value.
	 * 
	 * @return     string
	 */
	public function getDbsUid()
	{
		return $this->dbs_uid;
	}

	/**
	 * Get the [pro_uid] column value.
	 * 
	 * @return     string
	 */
	public function getProUid()
	{
		return $this->pro_uid;
	}

	/**
	 * Get the [dbs_type] column value.
	 * 
	 * @return     string
	 */
	public function getDbsType()
	{
		return $this->dbs_type;
	}

	/**
	 * Get the [dbs_server] column value.
	 * 
	 * @return     string
	 */
	public function getDbsServer()
	{
		return $this->dbs_server;
	}

	/**
	 * Get the [dbs_database_name] column value.
	 * 
	 * @return     string
	 */
	public function getDbsDatabaseName()
	{
		return $this->dbs_database_name;
	}

	/**
	 * Get the [dbs_username] column value.
	 * 
	 * @return     string
	 */
	public function getDbsUsername()
	{
		return $this->dbs_username;
	}

	/**
	 * Get the [dbs_password] column value.
	 * 
	 * @return     string
	 */
	public function getDbsPassword()
	{
		return $this->dbs_password;
	}

	/**
	 * Get the [dbs_port] column value.
	 * 
	 * @return     int
	 */
	public function getDbsPort()
	{
		return $this->dbs_port;
	}

	/**
	 * Get the [dbs_encode] column value.
	 * 
	 * @return     string
	 */
	public function getDbsEncode()
	{
		return $this->dbs_encode;
	}

	/**
	 * Set the value of [dbs_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     DbSource The current object (for fluent API support)
	 */
	public function setDbsUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->dbs_uid !== $v) {
			$this->dbs_uid = $v;
			$this->modifiedColumns[] = DbSourcePeer::DBS_UID;
		}

		return $this;
	} // setDbsUid()

	/**
	 * Set the value of [pro_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     DbSource The current object (for fluent API support)
	 */
	public function setProUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_uid !== $v) {
			$this->pro_uid = $v;
			$this->modifiedColumns[] = DbSourcePeer::PRO_UID;
		}

		return $this;
	} // setProUid()

	/**
	 * Set the value of [dbs_type] column.
	 * 
	 * @param      string $v new value
	 * @return     DbSource The current object (for fluent API support)
	 */
	public function setDbsType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->dbs_type !== $v) {
			$this->dbs_type = $v;
			$this->modifiedColumns[] = DbSourcePeer::DBS_TYPE;
		}

		return $this;
	} // setDbsType()

	/**
	 * Set the value of [dbs_server] column.
	 * 
	 * @param      string $v new value
	 * @return     DbSource The current object (for fluent API support)
	 */
	public function setDbsServer($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->dbs_server !== $v) {
			$this->dbs_server = $v;
			$this->modifiedColumns[] = DbSourcePeer::DBS_SERVER;
		}

		return $this;
	} // setDbsServer()

	/**
	 * Set the value of [dbs_database_name] column.
	 * 
	 * @param      string $v new value
	 * @return     DbSource The current object (for fluent API support)
	 */
	public function setDbsDatabaseName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->dbs_database_name !== $v) {
			$this->dbs_database_name = $v;
			$this->modifiedColumns[] = DbSourcePeer::DBS_DATABASE_NAME;
		}

		return $this;
	} // setDbsDatabaseName()

	/**
	 * Set the value of [dbs_username] column.
	 * 
	 * @param      string $v new value
	 * @return     DbSource The current object (for fluent API support)
	 */
	public function setDbsUsername($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->dbs_username !== $v) {
			$this->dbs_username = $v;
			$this->modifiedColumns[] = DbSourcePeer::DBS_USERNAME;
		}

		return $this;
	} // setDbsUsername()

	/**
	 * Set the value of [dbs_password] column.
	 * 
	 * @param      string $v new value
	 * @return     DbSource The current object (for fluent API support)
	 */
	public function setDbsPassword($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->dbs_password !== $v) {
			$this->dbs_password = $v;
			$this->modifiedColumns[] = DbSourcePeer::DBS_PASSWORD;
		}

		return $this;
	} // setDbsPassword()

	/**
	 * Set the value of [dbs_port] column.
	 * 
	 * @param      int $v new value
	 * @return     DbSource The current object (for fluent API support)
	 */
	public function setDbsPort($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->dbs_port !== $v) {
			$this->dbs_port = $v;
			$this->modifiedColumns[] = DbSourcePeer::DBS_PORT;
		}

		return $this;
	} // setDbsPort()

	/**
	 * Set the value of [dbs_encode] column.
	 * 
	 * @param      string $v new value
	 * @return     DbSource The current object (for fluent API support)
	 */
	public function setDbsEncode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->dbs_encode !== $v) {
			$this->dbs_encode = $v;
			$this->modifiedColumns[] = DbSourcePeer::DBS_ENCODE;
		}

		return $this;
	} // setDbsEncode()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			if ($this->dbs_uid !== '') {
				return false;
			}

			if ($this->pro_uid !== '0') {
				return false;
			}

			if ($this->dbs_type !== '0') {
				return false;
			}

			if ($this->dbs_server !== '0') {
				return false;
			}

			if ($this->dbs_database_name !== '0') {
				return false;
			}

			if ($this->dbs_username !== '0') {
				return false;
			}

			if ($this->dbs_password !== '') {
				return false;
			}

			if ($this->dbs_port !== 0) {
				return false;
			}

			if ($this->dbs_encode !== '') {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->dbs_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->pro_uid = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->dbs_type = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->dbs_server = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->dbs_database_name = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->dbs_username = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->dbs_password = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->dbs_port = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->dbs_encode = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 9; // 9 = DbSourcePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating DbSource object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DbSourcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = DbSourcePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DbSourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = DbSourceQuery::create()
				->filterByPrimaryKey($this->getPrimaryKey());
			$ret = $this->preDelete($con);
			if ($ret) {
				$deleteQuery->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(DbSourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				DbSourcePeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;


			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setNew(false);
				} else {
					$affectedRows = DbSourcePeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = DbSourcePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DbSourcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getDbsUid();
				break;
			case 1:
				return $this->getProUid();
				break;
			case 2:
				return $this->getDbsType();
				break;
			case 3:
				return $this->getDbsServer();
				break;
			case 4:
				return $this->getDbsDatabaseName();
				break;
			case 5:
				return $this->getDbsUsername();
				break;
			case 6:
				return $this->getDbsPassword();
				break;
			case 7:
				return $this->getDbsPort();
				break;
			case 8:
				return $this->getDbsEncode();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
	{
		if (isset($alreadyDumpedObjects['DbSource'][serialize($this->getPrimaryKey())])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['DbSource'][serialize($this->getPrimaryKey())] = true;
		$keys = DbSourcePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getDbsUid(),
			$keys[1] => $this->getProUid(),
			$keys[2] => $this->getDbsType(),
			$keys[3] => $this->getDbsServer(),
			$keys[4] => $this->getDbsDatabaseName(),
			$keys[5] => $this->getDbsUsername(),
			$keys[6] => $this->getDbsPassword(),
			$keys[7] => $this->getDbsPort(),
			$keys[8] => $this->getDbsEncode(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = DbSourcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setDbsUid($value);
				break;
			case 1:
				$this->setProUid($value);
				break;
			case 2:
				$this->setDbsType($value);
				break;
			case 3:
				$this->setDbsServer($value);
				break;
			case 4:
				$this->setDbsDatabaseName($value);
				break;
			case 5:
				$this->setDbsUsername($value);
				break;
			case 6:
				$this->setDbsPassword($value);
				break;
			case 7:
				$this->setDbsPort($value);
				break;
			case 8:
				$this->setDbsEncode($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = DbSourcePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setDbsUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setProUid($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDbsType($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDbsServer($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDbsDatabaseName($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setDbsUsername($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setDbsPassword($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setDbsPort($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setDbsEncode($arr[$keys[8]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(DbSourcePeer::DATABASE_NAME);

		if ($this->isColumnModified(DbSourcePeer::DBS_UID)) $criteria->add(DbSourcePeer::DBS_UID, $this->dbs_uid);
		if ($this->isColumnModified(DbSourcePeer::PRO_UID)) $criteria->add(DbSourcePeer::PRO_UID, $this->pro_uid);
		if ($this->isColumnModified(DbSourcePeer::DBS_TYPE)) $criteria->add(DbSourcePeer::DBS_TYPE, $this->dbs_type);
		if ($this->isColumnModified(DbSourcePeer::DBS_SERVER)) $criteria->add(DbSourcePeer::DBS_SERVER, $this->dbs_server);
		if ($this->isColumnModified(DbSourcePeer::DBS_DATABASE_NAME)) $criteria->add(DbSourcePeer::DBS_DATABASE_NAME, $this->dbs_database_name);
		if ($this->isColumnModified(DbSourcePeer::DBS_USERNAME)) $criteria->add(DbSourcePeer::DBS_USERNAME, $this->dbs_username);
		if ($this->isColumnModified(DbSourcePeer::DBS_PASSWORD)) $criteria->add(DbSourcePeer::DBS_PASSWORD, $this->dbs_password);
		if ($this->isColumnModified(DbSourcePeer::DBS_PORT)) $criteria->add(DbSourcePeer::DBS_PORT, $this->dbs_port);
		if ($this->isColumnModified(DbSourcePeer::DBS_ENCODE)) $criteria->add(DbSourcePeer::DBS_ENCODE, $this->dbs_encode);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(DbSourcePeer::DATABASE_NAME);
		$criteria->add(DbSourcePeer::DBS_UID, $this->dbs_uid);
		$criteria->add(DbSourcePeer::PRO_UID, $this->pro_uid);

		return $criteria;
	}

	/**
	 * Returns the composite primary key for this object.
	 * The array elements will be in same order as specified in XML.
	 * @return     array
	 */
	public function getPrimaryKey()
	{
		$pks = array();
		$pks[0] = $this->getDbsUid();
		$pks[1] = $this->getProUid();

		return $pks;
	}

	/**
	 * Set the [composite] primary key.
	 *
	 * @param      array $keys The elements of the composite key (order must match the order in XML file).
	 * @return     void
	 */
	public function setPrimaryKey($keys)
	{
		$this->setDbsUid($keys[0]);
		$this->setProUid($keys[1]);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return (null === $this->getDbsUid()) && (null === $this->getProUid());
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of DbSource (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setDbsUid($this->getDbsUid());
		$copyObj->setProUid($this->getProUid());
		$copyObj->setDbsType($this->getDbsType());
		$copyObj->setDbsServer($this->getDbsServer());
		$copyObj->setDbsDatabaseName($this->getDbsDatabaseName());
		$copyObj->setDbsUsername($this->getDbsUsername());
		$copyObj->setDbsPassword($this->getDbsPassword());
		$copyObj->setDbsPort($this->getDbsPort());
		$copyObj->setDbsEncode($this->getDbsEncode());
		if ($makeNew) {
			$copyObj->setNew(true);
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     DbSource Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     DbSourcePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new DbSourcePeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->dbs_uid = null;
		$this->pro_uid = null;
		$this->dbs_type = null;
		$this->dbs_server = null;
		$this->dbs_database_name = null;
		$this->dbs_username = null;
		$this->dbs_password = null;
		$this->dbs_port = null;
		$this->dbs_encode = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->applyDefaultValues();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(DbSourcePeer::DEFAULT_STRING_FORMAT);
	}

} // BaseDbSource
