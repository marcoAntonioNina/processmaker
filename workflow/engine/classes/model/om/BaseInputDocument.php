<?php


/**
 * Base class that represents a row from the 'INPUT_DOCUMENT' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseInputDocument extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'InputDocumentPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        InputDocumentPeer
	 */
	protected static $peer;

	/**
	 * The value for the inp_doc_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $inp_doc_uid;

	/**
	 * The value for the pro_uid field.
	 * Note: this column has a database default value of: '0'
	 * @var        string
	 */
	protected $pro_uid;

	/**
	 * The value for the inp_doc_form_needed field.
	 * Note: this column has a database default value of: 'REAL'
	 * @var        string
	 */
	protected $inp_doc_form_needed;

	/**
	 * The value for the inp_doc_original field.
	 * Note: this column has a database default value of: 'COPY'
	 * @var        string
	 */
	protected $inp_doc_original;

	/**
	 * The value for the inp_doc_published field.
	 * Note: this column has a database default value of: 'PRIVATE'
	 * @var        string
	 */
	protected $inp_doc_published;

	/**
	 * The value for the inp_doc_versioning field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $inp_doc_versioning;

	/**
	 * The value for the inp_doc_destination_path field.
	 * @var        string
	 */
	protected $inp_doc_destination_path;

	/**
	 * The value for the inp_doc_tags field.
	 * @var        string
	 */
	protected $inp_doc_tags;

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
		$this->inp_doc_uid = '';
		$this->pro_uid = '0';
		$this->inp_doc_form_needed = 'REAL';
		$this->inp_doc_original = 'COPY';
		$this->inp_doc_published = 'PRIVATE';
		$this->inp_doc_versioning = 0;
	}

	/**
	 * Initializes internal state of BaseInputDocument object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [inp_doc_uid] column value.
	 * 
	 * @return     string
	 */
	public function getInpDocUid()
	{
		return $this->inp_doc_uid;
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
	 * Get the [inp_doc_form_needed] column value.
	 * 
	 * @return     string
	 */
	public function getInpDocFormNeeded()
	{
		return $this->inp_doc_form_needed;
	}

	/**
	 * Get the [inp_doc_original] column value.
	 * 
	 * @return     string
	 */
	public function getInpDocOriginal()
	{
		return $this->inp_doc_original;
	}

	/**
	 * Get the [inp_doc_published] column value.
	 * 
	 * @return     string
	 */
	public function getInpDocPublished()
	{
		return $this->inp_doc_published;
	}

	/**
	 * Get the [inp_doc_versioning] column value.
	 * 
	 * @return     int
	 */
	public function getInpDocVersioning()
	{
		return $this->inp_doc_versioning;
	}

	/**
	 * Get the [inp_doc_destination_path] column value.
	 * 
	 * @return     string
	 */
	public function getInpDocDestinationPath()
	{
		return $this->inp_doc_destination_path;
	}

	/**
	 * Get the [inp_doc_tags] column value.
	 * 
	 * @return     string
	 */
	public function getInpDocTags()
	{
		return $this->inp_doc_tags;
	}

	/**
	 * Set the value of [inp_doc_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     InputDocument The current object (for fluent API support)
	 */
	public function setInpDocUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->inp_doc_uid !== $v) {
			$this->inp_doc_uid = $v;
			$this->modifiedColumns[] = InputDocumentPeer::INP_DOC_UID;
		}

		return $this;
	} // setInpDocUid()

	/**
	 * Set the value of [pro_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     InputDocument The current object (for fluent API support)
	 */
	public function setProUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_uid !== $v) {
			$this->pro_uid = $v;
			$this->modifiedColumns[] = InputDocumentPeer::PRO_UID;
		}

		return $this;
	} // setProUid()

	/**
	 * Set the value of [inp_doc_form_needed] column.
	 * 
	 * @param      string $v new value
	 * @return     InputDocument The current object (for fluent API support)
	 */
	public function setInpDocFormNeeded($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->inp_doc_form_needed !== $v) {
			$this->inp_doc_form_needed = $v;
			$this->modifiedColumns[] = InputDocumentPeer::INP_DOC_FORM_NEEDED;
		}

		return $this;
	} // setInpDocFormNeeded()

	/**
	 * Set the value of [inp_doc_original] column.
	 * 
	 * @param      string $v new value
	 * @return     InputDocument The current object (for fluent API support)
	 */
	public function setInpDocOriginal($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->inp_doc_original !== $v) {
			$this->inp_doc_original = $v;
			$this->modifiedColumns[] = InputDocumentPeer::INP_DOC_ORIGINAL;
		}

		return $this;
	} // setInpDocOriginal()

	/**
	 * Set the value of [inp_doc_published] column.
	 * 
	 * @param      string $v new value
	 * @return     InputDocument The current object (for fluent API support)
	 */
	public function setInpDocPublished($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->inp_doc_published !== $v) {
			$this->inp_doc_published = $v;
			$this->modifiedColumns[] = InputDocumentPeer::INP_DOC_PUBLISHED;
		}

		return $this;
	} // setInpDocPublished()

	/**
	 * Set the value of [inp_doc_versioning] column.
	 * 
	 * @param      int $v new value
	 * @return     InputDocument The current object (for fluent API support)
	 */
	public function setInpDocVersioning($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->inp_doc_versioning !== $v) {
			$this->inp_doc_versioning = $v;
			$this->modifiedColumns[] = InputDocumentPeer::INP_DOC_VERSIONING;
		}

		return $this;
	} // setInpDocVersioning()

	/**
	 * Set the value of [inp_doc_destination_path] column.
	 * 
	 * @param      string $v new value
	 * @return     InputDocument The current object (for fluent API support)
	 */
	public function setInpDocDestinationPath($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->inp_doc_destination_path !== $v) {
			$this->inp_doc_destination_path = $v;
			$this->modifiedColumns[] = InputDocumentPeer::INP_DOC_DESTINATION_PATH;
		}

		return $this;
	} // setInpDocDestinationPath()

	/**
	 * Set the value of [inp_doc_tags] column.
	 * 
	 * @param      string $v new value
	 * @return     InputDocument The current object (for fluent API support)
	 */
	public function setInpDocTags($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->inp_doc_tags !== $v) {
			$this->inp_doc_tags = $v;
			$this->modifiedColumns[] = InputDocumentPeer::INP_DOC_TAGS;
		}

		return $this;
	} // setInpDocTags()

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
			if ($this->inp_doc_uid !== '') {
				return false;
			}

			if ($this->pro_uid !== '0') {
				return false;
			}

			if ($this->inp_doc_form_needed !== 'REAL') {
				return false;
			}

			if ($this->inp_doc_original !== 'COPY') {
				return false;
			}

			if ($this->inp_doc_published !== 'PRIVATE') {
				return false;
			}

			if ($this->inp_doc_versioning !== 0) {
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

			$this->inp_doc_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->pro_uid = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->inp_doc_form_needed = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->inp_doc_original = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->inp_doc_published = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->inp_doc_versioning = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->inp_doc_destination_path = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->inp_doc_tags = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 8; // 8 = InputDocumentPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating InputDocument object", $e);
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
			$con = Propel::getConnection(InputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = InputDocumentPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(InputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = InputDocumentQuery::create()
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
			$con = Propel::getConnection(InputDocumentPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				InputDocumentPeer::addInstanceToPool($this);
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
					$affectedRows = InputDocumentPeer::doUpdate($this, $con);
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


			if (($retval = InputDocumentPeer::doValidate($this, $columns)) !== true) {
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
		$pos = InputDocumentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getInpDocUid();
				break;
			case 1:
				return $this->getProUid();
				break;
			case 2:
				return $this->getInpDocFormNeeded();
				break;
			case 3:
				return $this->getInpDocOriginal();
				break;
			case 4:
				return $this->getInpDocPublished();
				break;
			case 5:
				return $this->getInpDocVersioning();
				break;
			case 6:
				return $this->getInpDocDestinationPath();
				break;
			case 7:
				return $this->getInpDocTags();
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
		if (isset($alreadyDumpedObjects['InputDocument'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['InputDocument'][$this->getPrimaryKey()] = true;
		$keys = InputDocumentPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getInpDocUid(),
			$keys[1] => $this->getProUid(),
			$keys[2] => $this->getInpDocFormNeeded(),
			$keys[3] => $this->getInpDocOriginal(),
			$keys[4] => $this->getInpDocPublished(),
			$keys[5] => $this->getInpDocVersioning(),
			$keys[6] => $this->getInpDocDestinationPath(),
			$keys[7] => $this->getInpDocTags(),
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
		$pos = InputDocumentPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setInpDocUid($value);
				break;
			case 1:
				$this->setProUid($value);
				break;
			case 2:
				$this->setInpDocFormNeeded($value);
				break;
			case 3:
				$this->setInpDocOriginal($value);
				break;
			case 4:
				$this->setInpDocPublished($value);
				break;
			case 5:
				$this->setInpDocVersioning($value);
				break;
			case 6:
				$this->setInpDocDestinationPath($value);
				break;
			case 7:
				$this->setInpDocTags($value);
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
		$keys = InputDocumentPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setInpDocUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setProUid($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setInpDocFormNeeded($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setInpDocOriginal($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setInpDocPublished($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setInpDocVersioning($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setInpDocDestinationPath($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setInpDocTags($arr[$keys[7]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(InputDocumentPeer::DATABASE_NAME);

		if ($this->isColumnModified(InputDocumentPeer::INP_DOC_UID)) $criteria->add(InputDocumentPeer::INP_DOC_UID, $this->inp_doc_uid);
		if ($this->isColumnModified(InputDocumentPeer::PRO_UID)) $criteria->add(InputDocumentPeer::PRO_UID, $this->pro_uid);
		if ($this->isColumnModified(InputDocumentPeer::INP_DOC_FORM_NEEDED)) $criteria->add(InputDocumentPeer::INP_DOC_FORM_NEEDED, $this->inp_doc_form_needed);
		if ($this->isColumnModified(InputDocumentPeer::INP_DOC_ORIGINAL)) $criteria->add(InputDocumentPeer::INP_DOC_ORIGINAL, $this->inp_doc_original);
		if ($this->isColumnModified(InputDocumentPeer::INP_DOC_PUBLISHED)) $criteria->add(InputDocumentPeer::INP_DOC_PUBLISHED, $this->inp_doc_published);
		if ($this->isColumnModified(InputDocumentPeer::INP_DOC_VERSIONING)) $criteria->add(InputDocumentPeer::INP_DOC_VERSIONING, $this->inp_doc_versioning);
		if ($this->isColumnModified(InputDocumentPeer::INP_DOC_DESTINATION_PATH)) $criteria->add(InputDocumentPeer::INP_DOC_DESTINATION_PATH, $this->inp_doc_destination_path);
		if ($this->isColumnModified(InputDocumentPeer::INP_DOC_TAGS)) $criteria->add(InputDocumentPeer::INP_DOC_TAGS, $this->inp_doc_tags);

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
		$criteria = new Criteria(InputDocumentPeer::DATABASE_NAME);
		$criteria->add(InputDocumentPeer::INP_DOC_UID, $this->inp_doc_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getInpDocUid();
	}

	/**
	 * Generic method to set the primary key (inp_doc_uid column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setInpDocUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getInpDocUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of InputDocument (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setInpDocUid($this->getInpDocUid());
		$copyObj->setProUid($this->getProUid());
		$copyObj->setInpDocFormNeeded($this->getInpDocFormNeeded());
		$copyObj->setInpDocOriginal($this->getInpDocOriginal());
		$copyObj->setInpDocPublished($this->getInpDocPublished());
		$copyObj->setInpDocVersioning($this->getInpDocVersioning());
		$copyObj->setInpDocDestinationPath($this->getInpDocDestinationPath());
		$copyObj->setInpDocTags($this->getInpDocTags());
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
	 * @return     InputDocument Clone of current object.
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
	 * @return     InputDocumentPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new InputDocumentPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->inp_doc_uid = null;
		$this->pro_uid = null;
		$this->inp_doc_form_needed = null;
		$this->inp_doc_original = null;
		$this->inp_doc_published = null;
		$this->inp_doc_versioning = null;
		$this->inp_doc_destination_path = null;
		$this->inp_doc_tags = null;
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
		return (string) $this->exportTo(InputDocumentPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseInputDocument
