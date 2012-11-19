<?php


/**
 * Base class that represents a row from the 'FIELD_CONDITION' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseFieldCondition extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'FieldConditionPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        FieldConditionPeer
	 */
	protected static $peer;

	/**
	 * The value for the fcd_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $fcd_uid;

	/**
	 * The value for the fcd_function field.
	 * @var        string
	 */
	protected $fcd_function;

	/**
	 * The value for the fcd_fields field.
	 * @var        string
	 */
	protected $fcd_fields;

	/**
	 * The value for the fcd_condition field.
	 * @var        string
	 */
	protected $fcd_condition;

	/**
	 * The value for the fcd_events field.
	 * @var        string
	 */
	protected $fcd_events;

	/**
	 * The value for the fcd_event_owners field.
	 * @var        string
	 */
	protected $fcd_event_owners;

	/**
	 * The value for the fcd_status field.
	 * @var        string
	 */
	protected $fcd_status;

	/**
	 * The value for the fcd_dyn_uid field.
	 * @var        string
	 */
	protected $fcd_dyn_uid;

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
		$this->fcd_uid = '';
	}

	/**
	 * Initializes internal state of BaseFieldCondition object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [fcd_uid] column value.
	 * 
	 * @return     string
	 */
	public function getFcdUid()
	{
		return $this->fcd_uid;
	}

	/**
	 * Get the [fcd_function] column value.
	 * 
	 * @return     string
	 */
	public function getFcdFunction()
	{
		return $this->fcd_function;
	}

	/**
	 * Get the [fcd_fields] column value.
	 * 
	 * @return     string
	 */
	public function getFcdFields()
	{
		return $this->fcd_fields;
	}

	/**
	 * Get the [fcd_condition] column value.
	 * 
	 * @return     string
	 */
	public function getFcdCondition()
	{
		return $this->fcd_condition;
	}

	/**
	 * Get the [fcd_events] column value.
	 * 
	 * @return     string
	 */
	public function getFcdEvents()
	{
		return $this->fcd_events;
	}

	/**
	 * Get the [fcd_event_owners] column value.
	 * 
	 * @return     string
	 */
	public function getFcdEventOwners()
	{
		return $this->fcd_event_owners;
	}

	/**
	 * Get the [fcd_status] column value.
	 * 
	 * @return     string
	 */
	public function getFcdStatus()
	{
		return $this->fcd_status;
	}

	/**
	 * Get the [fcd_dyn_uid] column value.
	 * 
	 * @return     string
	 */
	public function getFcdDynUid()
	{
		return $this->fcd_dyn_uid;
	}

	/**
	 * Set the value of [fcd_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     FieldCondition The current object (for fluent API support)
	 */
	public function setFcdUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fcd_uid !== $v) {
			$this->fcd_uid = $v;
			$this->modifiedColumns[] = FieldConditionPeer::FCD_UID;
		}

		return $this;
	} // setFcdUid()

	/**
	 * Set the value of [fcd_function] column.
	 * 
	 * @param      string $v new value
	 * @return     FieldCondition The current object (for fluent API support)
	 */
	public function setFcdFunction($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fcd_function !== $v) {
			$this->fcd_function = $v;
			$this->modifiedColumns[] = FieldConditionPeer::FCD_FUNCTION;
		}

		return $this;
	} // setFcdFunction()

	/**
	 * Set the value of [fcd_fields] column.
	 * 
	 * @param      string $v new value
	 * @return     FieldCondition The current object (for fluent API support)
	 */
	public function setFcdFields($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fcd_fields !== $v) {
			$this->fcd_fields = $v;
			$this->modifiedColumns[] = FieldConditionPeer::FCD_FIELDS;
		}

		return $this;
	} // setFcdFields()

	/**
	 * Set the value of [fcd_condition] column.
	 * 
	 * @param      string $v new value
	 * @return     FieldCondition The current object (for fluent API support)
	 */
	public function setFcdCondition($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fcd_condition !== $v) {
			$this->fcd_condition = $v;
			$this->modifiedColumns[] = FieldConditionPeer::FCD_CONDITION;
		}

		return $this;
	} // setFcdCondition()

	/**
	 * Set the value of [fcd_events] column.
	 * 
	 * @param      string $v new value
	 * @return     FieldCondition The current object (for fluent API support)
	 */
	public function setFcdEvents($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fcd_events !== $v) {
			$this->fcd_events = $v;
			$this->modifiedColumns[] = FieldConditionPeer::FCD_EVENTS;
		}

		return $this;
	} // setFcdEvents()

	/**
	 * Set the value of [fcd_event_owners] column.
	 * 
	 * @param      string $v new value
	 * @return     FieldCondition The current object (for fluent API support)
	 */
	public function setFcdEventOwners($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fcd_event_owners !== $v) {
			$this->fcd_event_owners = $v;
			$this->modifiedColumns[] = FieldConditionPeer::FCD_EVENT_OWNERS;
		}

		return $this;
	} // setFcdEventOwners()

	/**
	 * Set the value of [fcd_status] column.
	 * 
	 * @param      string $v new value
	 * @return     FieldCondition The current object (for fluent API support)
	 */
	public function setFcdStatus($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fcd_status !== $v) {
			$this->fcd_status = $v;
			$this->modifiedColumns[] = FieldConditionPeer::FCD_STATUS;
		}

		return $this;
	} // setFcdStatus()

	/**
	 * Set the value of [fcd_dyn_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     FieldCondition The current object (for fluent API support)
	 */
	public function setFcdDynUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fcd_dyn_uid !== $v) {
			$this->fcd_dyn_uid = $v;
			$this->modifiedColumns[] = FieldConditionPeer::FCD_DYN_UID;
		}

		return $this;
	} // setFcdDynUid()

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
			if ($this->fcd_uid !== '') {
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

			$this->fcd_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->fcd_function = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->fcd_fields = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->fcd_condition = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->fcd_events = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->fcd_event_owners = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->fcd_status = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->fcd_dyn_uid = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 8; // 8 = FieldConditionPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating FieldCondition object", $e);
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
			$con = Propel::getConnection(FieldConditionPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = FieldConditionPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(FieldConditionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = FieldConditionQuery::create()
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
			$con = Propel::getConnection(FieldConditionPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				FieldConditionPeer::addInstanceToPool($this);
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
					$affectedRows = FieldConditionPeer::doUpdate($this, $con);
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


			if (($retval = FieldConditionPeer::doValidate($this, $columns)) !== true) {
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
		$pos = FieldConditionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getFcdUid();
				break;
			case 1:
				return $this->getFcdFunction();
				break;
			case 2:
				return $this->getFcdFields();
				break;
			case 3:
				return $this->getFcdCondition();
				break;
			case 4:
				return $this->getFcdEvents();
				break;
			case 5:
				return $this->getFcdEventOwners();
				break;
			case 6:
				return $this->getFcdStatus();
				break;
			case 7:
				return $this->getFcdDynUid();
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
		if (isset($alreadyDumpedObjects['FieldCondition'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['FieldCondition'][$this->getPrimaryKey()] = true;
		$keys = FieldConditionPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getFcdUid(),
			$keys[1] => $this->getFcdFunction(),
			$keys[2] => $this->getFcdFields(),
			$keys[3] => $this->getFcdCondition(),
			$keys[4] => $this->getFcdEvents(),
			$keys[5] => $this->getFcdEventOwners(),
			$keys[6] => $this->getFcdStatus(),
			$keys[7] => $this->getFcdDynUid(),
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
		$pos = FieldConditionPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setFcdUid($value);
				break;
			case 1:
				$this->setFcdFunction($value);
				break;
			case 2:
				$this->setFcdFields($value);
				break;
			case 3:
				$this->setFcdCondition($value);
				break;
			case 4:
				$this->setFcdEvents($value);
				break;
			case 5:
				$this->setFcdEventOwners($value);
				break;
			case 6:
				$this->setFcdStatus($value);
				break;
			case 7:
				$this->setFcdDynUid($value);
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
		$keys = FieldConditionPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setFcdUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setFcdFunction($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFcdFields($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFcdCondition($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFcdEvents($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFcdEventOwners($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setFcdStatus($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setFcdDynUid($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(FieldConditionPeer::DATABASE_NAME);

		if ($this->isColumnModified(FieldConditionPeer::FCD_UID)) $criteria->add(FieldConditionPeer::FCD_UID, $this->fcd_uid);
		if ($this->isColumnModified(FieldConditionPeer::FCD_FUNCTION)) $criteria->add(FieldConditionPeer::FCD_FUNCTION, $this->fcd_function);
		if ($this->isColumnModified(FieldConditionPeer::FCD_FIELDS)) $criteria->add(FieldConditionPeer::FCD_FIELDS, $this->fcd_fields);
		if ($this->isColumnModified(FieldConditionPeer::FCD_CONDITION)) $criteria->add(FieldConditionPeer::FCD_CONDITION, $this->fcd_condition);
		if ($this->isColumnModified(FieldConditionPeer::FCD_EVENTS)) $criteria->add(FieldConditionPeer::FCD_EVENTS, $this->fcd_events);
		if ($this->isColumnModified(FieldConditionPeer::FCD_EVENT_OWNERS)) $criteria->add(FieldConditionPeer::FCD_EVENT_OWNERS, $this->fcd_event_owners);
		if ($this->isColumnModified(FieldConditionPeer::FCD_STATUS)) $criteria->add(FieldConditionPeer::FCD_STATUS, $this->fcd_status);
		if ($this->isColumnModified(FieldConditionPeer::FCD_DYN_UID)) $criteria->add(FieldConditionPeer::FCD_DYN_UID, $this->fcd_dyn_uid);

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
		$criteria = new Criteria(FieldConditionPeer::DATABASE_NAME);
		$criteria->add(FieldConditionPeer::FCD_UID, $this->fcd_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getFcdUid();
	}

	/**
	 * Generic method to set the primary key (fcd_uid column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setFcdUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getFcdUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of FieldCondition (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setFcdUid($this->getFcdUid());
		$copyObj->setFcdFunction($this->getFcdFunction());
		$copyObj->setFcdFields($this->getFcdFields());
		$copyObj->setFcdCondition($this->getFcdCondition());
		$copyObj->setFcdEvents($this->getFcdEvents());
		$copyObj->setFcdEventOwners($this->getFcdEventOwners());
		$copyObj->setFcdStatus($this->getFcdStatus());
		$copyObj->setFcdDynUid($this->getFcdDynUid());
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
	 * @return     FieldCondition Clone of current object.
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
	 * @return     FieldConditionPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new FieldConditionPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->fcd_uid = null;
		$this->fcd_function = null;
		$this->fcd_fields = null;
		$this->fcd_condition = null;
		$this->fcd_events = null;
		$this->fcd_event_owners = null;
		$this->fcd_status = null;
		$this->fcd_dyn_uid = null;
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
		return (string) $this->exportTo(FieldConditionPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseFieldCondition
