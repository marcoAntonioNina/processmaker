<?php


require_once 'propel/om/BaseObject.php';
require_once 'propel/om/Persistent.php';

include_once 'propel/query/Criteria.php';
include_once 'classes/model/SessionPeer.php';

/**
 * Base class that represents a row from the 'SESSION' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseSession extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'SessionPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        SessionPeer
	 */
	protected static $peer;

	/**
	 * The value for the ses_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $ses_uid;

	/**
	 * The value for the ses_status field.
	 * Note: this column has a database default value of: 'ACTIVE'
	 * @var        string
	 */
	protected $ses_status;

	/**
	 * The value for the usr_uid field.
	 * Note: this column has a database default value of: 'ACTIVE'
	 * @var        string
	 */
	protected $usr_uid;

	/**
	 * The value for the ses_remote_ip field.
	 * Note: this column has a database default value of: '0.0.0.0'
	 * @var        string
	 */
	protected $ses_remote_ip;

	/**
	 * The value for the ses_init_date field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $ses_init_date;

	/**
	 * The value for the ses_due_date field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $ses_due_date;

	/**
	 * The value for the ses_end_date field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $ses_end_date;

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
		$this->ses_uid = '';
		$this->ses_status = 'ACTIVE';
		$this->usr_uid = 'ACTIVE';
		$this->ses_remote_ip = '0.0.0.0';
		$this->ses_init_date = '';
		$this->ses_due_date = '';
		$this->ses_end_date = '';
	}

	/**
	 * Initializes internal state of BaseSession object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [ses_uid] column value.
	 * 
	 * @return     string
	 */
	public function getSesUid()
	{
		return $this->ses_uid;
	}

	/**
	 * Get the [ses_status] column value.
	 * 
	 * @return     string
	 */
	public function getSesStatus()
	{
		return $this->ses_status;
	}

	/**
	 * Get the [usr_uid] column value.
	 * 
	 * @return     string
	 */
	public function getUsrUid()
	{
		return $this->usr_uid;
	}

	/**
	 * Get the [ses_remote_ip] column value.
	 * 
	 * @return     string
	 */
	public function getSesRemoteIp()
	{
		return $this->ses_remote_ip;
	}

	/**
	 * Get the [ses_init_date] column value.
	 * 
	 * @return     string
	 */
	public function getSesInitDate()
	{
		return $this->ses_init_date;
	}

	/**
	 * Get the [ses_due_date] column value.
	 * 
	 * @return     string
	 */
	public function getSesDueDate()
	{
		return $this->ses_due_date;
	}

	/**
	 * Get the [ses_end_date] column value.
	 * 
	 * @return     string
	 */
	public function getSesEndDate()
	{
		return $this->ses_end_date;
	}

	/**
	 * Set the value of [ses_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setSesUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ses_uid !== $v) {
			$this->ses_uid = $v;
			$this->modifiedColumns[] = SessionPeer::SES_UID;
		}

		return $this;
	} // setSesUid()

	/**
	 * Set the value of [ses_status] column.
	 * 
	 * @param      string $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setSesStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ses_status !== $v) {
			$this->ses_status = $v;
			$this->modifiedColumns[] = SessionPeer::SES_STATUS;
		}

		return $this;
	} // setSesStatus()

	/**
	 * Set the value of [usr_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setUsrUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->usr_uid !== $v) {
			$this->usr_uid = $v;
			$this->modifiedColumns[] = SessionPeer::USR_UID;
		}

		return $this;
	} // setUsrUid()

	/**
	 * Set the value of [ses_remote_ip] column.
	 * 
	 * @param      string $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setSesRemoteIp($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ses_remote_ip !== $v) {
			$this->ses_remote_ip = $v;
			$this->modifiedColumns[] = SessionPeer::SES_REMOTE_IP;
		}

		return $this;
	} // setSesRemoteIp()

	/**
	 * Set the value of [ses_init_date] column.
	 * 
	 * @param      string $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setSesInitDate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ses_init_date !== $v) {
			$this->ses_init_date = $v;
			$this->modifiedColumns[] = SessionPeer::SES_INIT_DATE;
		}

		return $this;
	} // setSesInitDate()

	/**
	 * Set the value of [ses_due_date] column.
	 * 
	 * @param      string $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setSesDueDate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ses_due_date !== $v) {
			$this->ses_due_date = $v;
			$this->modifiedColumns[] = SessionPeer::SES_DUE_DATE;
		}

		return $this;
	} // setSesDueDate()

	/**
	 * Set the value of [ses_end_date] column.
	 * 
	 * @param      string $v new value
	 * @return     Session The current object (for fluent API support)
	 */
	public function setSesEndDate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ses_end_date !== $v) {
			$this->ses_end_date = $v;
			$this->modifiedColumns[] = SessionPeer::SES_END_DATE;
		}

		return $this;
	} // setSesEndDate()

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
			if ($this->ses_uid !== '') {
				return false;
			}

			if ($this->ses_status !== 'ACTIVE') {
				return false;
			}

			if ($this->usr_uid !== 'ACTIVE') {
				return false;
			}

			if ($this->ses_remote_ip !== '0.0.0.0') {
				return false;
			}

			if ($this->ses_init_date !== '') {
				return false;
			}

			if ($this->ses_due_date !== '') {
				return false;
			}

			if ($this->ses_end_date !== '') {
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

			$this->ses_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->ses_status = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->usr_uid = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->ses_remote_ip = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->ses_init_date = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->ses_due_date = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->ses_end_date = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 7; // 7 = SessionPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Session object", $e);
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
			$con = Propel::getConnection(SessionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = SessionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(SessionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = SessionQuery::create()
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
			$con = Propel::getConnection(SessionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				SessionPeer::addInstanceToPool($this);
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
					$affectedRows = SessionPeer::doUpdate($this, $con);
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


			if (($retval = SessionPeer::doValidate($this, $columns)) !== true) {
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
		$pos = SessionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getSesUid();
				break;
			case 1:
				return $this->getSesStatus();
				break;
			case 2:
				return $this->getUsrUid();
				break;
			case 3:
				return $this->getSesRemoteIp();
				break;
			case 4:
				return $this->getSesInitDate();
				break;
			case 5:
				return $this->getSesDueDate();
				break;
			case 6:
				return $this->getSesEndDate();
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
		if (isset($alreadyDumpedObjects['Session'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Session'][$this->getPrimaryKey()] = true;
		$keys = SessionPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getSesUid(),
			$keys[1] => $this->getSesStatus(),
			$keys[2] => $this->getUsrUid(),
			$keys[3] => $this->getSesRemoteIp(),
			$keys[4] => $this->getSesInitDate(),
			$keys[5] => $this->getSesDueDate(),
			$keys[6] => $this->getSesEndDate(),
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
		$pos = SessionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setSesUid($value);
				break;
			case 1:
				$this->setSesStatus($value);
				break;
			case 2:
				$this->setUsrUid($value);
				break;
			case 3:
				$this->setSesRemoteIp($value);
				break;
			case 4:
				$this->setSesInitDate($value);
				break;
			case 5:
				$this->setSesDueDate($value);
				break;
			case 6:
				$this->setSesEndDate($value);
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
		$keys = SessionPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setSesUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setSesStatus($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUsrUid($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setSesRemoteIp($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setSesInitDate($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setSesDueDate($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setSesEndDate($arr[$keys[6]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(SessionPeer::DATABASE_NAME);

		if ($this->isColumnModified(SessionPeer::SES_UID)) $criteria->add(SessionPeer::SES_UID, $this->ses_uid);
		if ($this->isColumnModified(SessionPeer::SES_STATUS)) $criteria->add(SessionPeer::SES_STATUS, $this->ses_status);
		if ($this->isColumnModified(SessionPeer::USR_UID)) $criteria->add(SessionPeer::USR_UID, $this->usr_uid);
		if ($this->isColumnModified(SessionPeer::SES_REMOTE_IP)) $criteria->add(SessionPeer::SES_REMOTE_IP, $this->ses_remote_ip);
		if ($this->isColumnModified(SessionPeer::SES_INIT_DATE)) $criteria->add(SessionPeer::SES_INIT_DATE, $this->ses_init_date);
		if ($this->isColumnModified(SessionPeer::SES_DUE_DATE)) $criteria->add(SessionPeer::SES_DUE_DATE, $this->ses_due_date);
		if ($this->isColumnModified(SessionPeer::SES_END_DATE)) $criteria->add(SessionPeer::SES_END_DATE, $this->ses_end_date);

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
		$criteria = new Criteria(SessionPeer::DATABASE_NAME);
		$criteria->add(SessionPeer::SES_UID, $this->ses_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getSesUid();
	}

	/**
	 * Generic method to set the primary key (ses_uid column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setSesUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getSesUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Session (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setSesUid($this->getSesUid());
		$copyObj->setSesStatus($this->getSesStatus());
		$copyObj->setUsrUid($this->getUsrUid());
		$copyObj->setSesRemoteIp($this->getSesRemoteIp());
		$copyObj->setSesInitDate($this->getSesInitDate());
		$copyObj->setSesDueDate($this->getSesDueDate());
		$copyObj->setSesEndDate($this->getSesEndDate());
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
	 * @return     Session Clone of current object.
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
	 * @return     SessionPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new SessionPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->ses_uid = null;
		$this->ses_status = null;
		$this->usr_uid = null;
		$this->ses_remote_ip = null;
		$this->ses_init_date = null;
		$this->ses_due_date = null;
		$this->ses_end_date = null;
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
		return (string) $this->exportTo(SessionPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseSession
