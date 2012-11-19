<?php


/**
 * Base class that represents a row from the 'FIELDS' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseFields extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'FieldsPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        FieldsPeer
	 */
	protected static $peer;

	/**
	 * The value for the fld_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $fld_uid;

	/**
	 * The value for the add_tab_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $add_tab_uid;

	/**
	 * The value for the fld_index field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $fld_index;

	/**
	 * The value for the fld_name field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $fld_name;

	/**
	 * The value for the fld_description field.
	 * @var        string
	 */
	protected $fld_description;

	/**
	 * The value for the fld_type field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $fld_type;

	/**
	 * The value for the fld_size field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $fld_size;

	/**
	 * The value for the fld_null field.
	 * Note: this column has a database default value of: 1
	 * @var        int
	 */
	protected $fld_null;

	/**
	 * The value for the fld_auto_increment field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $fld_auto_increment;

	/**
	 * The value for the fld_key field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $fld_key;

	/**
	 * The value for the fld_foreign_key field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $fld_foreign_key;

	/**
	 * The value for the fld_foreign_key_table field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $fld_foreign_key_table;

	/**
	 * The value for the fld_dyn_name field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $fld_dyn_name;

	/**
	 * The value for the fld_dyn_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $fld_dyn_uid;

	/**
	 * The value for the fld_filter field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $fld_filter;

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
		$this->fld_uid = '';
		$this->add_tab_uid = '';
		$this->fld_index = 1;
		$this->fld_name = '';
		$this->fld_type = '';
		$this->fld_size = 0;
		$this->fld_null = 1;
		$this->fld_auto_increment = 0;
		$this->fld_key = 0;
		$this->fld_foreign_key = 0;
		$this->fld_foreign_key_table = '';
		$this->fld_dyn_name = '';
		$this->fld_dyn_uid = '';
		$this->fld_filter = 0;
	}

	/**
	 * Initializes internal state of BaseFields object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [fld_uid] column value.
	 * 
	 * @return     string
	 */
	public function getFldUid()
	{
		return $this->fld_uid;
	}

	/**
	 * Get the [add_tab_uid] column value.
	 * 
	 * @return     string
	 */
	public function getAddTabUid()
	{
		return $this->add_tab_uid;
	}

	/**
	 * Get the [fld_index] column value.
	 * 
	 * @return     int
	 */
	public function getFldIndex()
	{
		return $this->fld_index;
	}

	/**
	 * Get the [fld_name] column value.
	 * 
	 * @return     string
	 */
	public function getFldName()
	{
		return $this->fld_name;
	}

	/**
	 * Get the [fld_description] column value.
	 * 
	 * @return     string
	 */
	public function getFldDescription()
	{
		return $this->fld_description;
	}

	/**
	 * Get the [fld_type] column value.
	 * 
	 * @return     string
	 */
	public function getFldType()
	{
		return $this->fld_type;
	}

	/**
	 * Get the [fld_size] column value.
	 * 
	 * @return     int
	 */
	public function getFldSize()
	{
		return $this->fld_size;
	}

	/**
	 * Get the [fld_null] column value.
	 * 
	 * @return     int
	 */
	public function getFldNull()
	{
		return $this->fld_null;
	}

	/**
	 * Get the [fld_auto_increment] column value.
	 * 
	 * @return     int
	 */
	public function getFldAutoIncrement()
	{
		return $this->fld_auto_increment;
	}

	/**
	 * Get the [fld_key] column value.
	 * 
	 * @return     int
	 */
	public function getFldKey()
	{
		return $this->fld_key;
	}

	/**
	 * Get the [fld_foreign_key] column value.
	 * 
	 * @return     int
	 */
	public function getFldForeignKey()
	{
		return $this->fld_foreign_key;
	}

	/**
	 * Get the [fld_foreign_key_table] column value.
	 * 
	 * @return     string
	 */
	public function getFldForeignKeyTable()
	{
		return $this->fld_foreign_key_table;
	}

	/**
	 * Get the [fld_dyn_name] column value.
	 * 
	 * @return     string
	 */
	public function getFldDynName()
	{
		return $this->fld_dyn_name;
	}

	/**
	 * Get the [fld_dyn_uid] column value.
	 * 
	 * @return     string
	 */
	public function getFldDynUid()
	{
		return $this->fld_dyn_uid;
	}

	/**
	 * Get the [fld_filter] column value.
	 * 
	 * @return     int
	 */
	public function getFldFilter()
	{
		return $this->fld_filter;
	}

	/**
	 * Set the value of [fld_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     Fields The current object (for fluent API support)
	 */
	public function setFldUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fld_uid !== $v) {
			$this->fld_uid = $v;
			$this->modifiedColumns[] = FieldsPeer::FLD_UID;
		}

		return $this;
	} // setFldUid()

	/**
	 * Set the value of [add_tab_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     Fields The current object (for fluent API support)
	 */
	public function setAddTabUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->add_tab_uid !== $v) {
			$this->add_tab_uid = $v;
			$this->modifiedColumns[] = FieldsPeer::ADD_TAB_UID;
		}

		return $this;
	} // setAddTabUid()

	/**
	 * Set the value of [fld_index] column.
	 * 
	 * @param      int $v new value
	 * @return     Fields The current object (for fluent API support)
	 */
	public function setFldIndex($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->fld_index !== $v) {
			$this->fld_index = $v;
			$this->modifiedColumns[] = FieldsPeer::FLD_INDEX;
		}

		return $this;
	} // setFldIndex()

	/**
	 * Set the value of [fld_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Fields The current object (for fluent API support)
	 */
	public function setFldName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fld_name !== $v) {
			$this->fld_name = $v;
			$this->modifiedColumns[] = FieldsPeer::FLD_NAME;
		}

		return $this;
	} // setFldName()

	/**
	 * Set the value of [fld_description] column.
	 * 
	 * @param      string $v new value
	 * @return     Fields The current object (for fluent API support)
	 */
	public function setFldDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fld_description !== $v) {
			$this->fld_description = $v;
			$this->modifiedColumns[] = FieldsPeer::FLD_DESCRIPTION;
		}

		return $this;
	} // setFldDescription()

	/**
	 * Set the value of [fld_type] column.
	 * 
	 * @param      string $v new value
	 * @return     Fields The current object (for fluent API support)
	 */
	public function setFldType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fld_type !== $v) {
			$this->fld_type = $v;
			$this->modifiedColumns[] = FieldsPeer::FLD_TYPE;
		}

		return $this;
	} // setFldType()

	/**
	 * Set the value of [fld_size] column.
	 * 
	 * @param      int $v new value
	 * @return     Fields The current object (for fluent API support)
	 */
	public function setFldSize($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->fld_size !== $v) {
			$this->fld_size = $v;
			$this->modifiedColumns[] = FieldsPeer::FLD_SIZE;
		}

		return $this;
	} // setFldSize()

	/**
	 * Set the value of [fld_null] column.
	 * 
	 * @param      int $v new value
	 * @return     Fields The current object (for fluent API support)
	 */
	public function setFldNull($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->fld_null !== $v) {
			$this->fld_null = $v;
			$this->modifiedColumns[] = FieldsPeer::FLD_NULL;
		}

		return $this;
	} // setFldNull()

	/**
	 * Set the value of [fld_auto_increment] column.
	 * 
	 * @param      int $v new value
	 * @return     Fields The current object (for fluent API support)
	 */
	public function setFldAutoIncrement($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->fld_auto_increment !== $v) {
			$this->fld_auto_increment = $v;
			$this->modifiedColumns[] = FieldsPeer::FLD_AUTO_INCREMENT;
		}

		return $this;
	} // setFldAutoIncrement()

	/**
	 * Set the value of [fld_key] column.
	 * 
	 * @param      int $v new value
	 * @return     Fields The current object (for fluent API support)
	 */
	public function setFldKey($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->fld_key !== $v) {
			$this->fld_key = $v;
			$this->modifiedColumns[] = FieldsPeer::FLD_KEY;
		}

		return $this;
	} // setFldKey()

	/**
	 * Set the value of [fld_foreign_key] column.
	 * 
	 * @param      int $v new value
	 * @return     Fields The current object (for fluent API support)
	 */
	public function setFldForeignKey($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->fld_foreign_key !== $v) {
			$this->fld_foreign_key = $v;
			$this->modifiedColumns[] = FieldsPeer::FLD_FOREIGN_KEY;
		}

		return $this;
	} // setFldForeignKey()

	/**
	 * Set the value of [fld_foreign_key_table] column.
	 * 
	 * @param      string $v new value
	 * @return     Fields The current object (for fluent API support)
	 */
	public function setFldForeignKeyTable($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fld_foreign_key_table !== $v) {
			$this->fld_foreign_key_table = $v;
			$this->modifiedColumns[] = FieldsPeer::FLD_FOREIGN_KEY_TABLE;
		}

		return $this;
	} // setFldForeignKeyTable()

	/**
	 * Set the value of [fld_dyn_name] column.
	 * 
	 * @param      string $v new value
	 * @return     Fields The current object (for fluent API support)
	 */
	public function setFldDynName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fld_dyn_name !== $v) {
			$this->fld_dyn_name = $v;
			$this->modifiedColumns[] = FieldsPeer::FLD_DYN_NAME;
		}

		return $this;
	} // setFldDynName()

	/**
	 * Set the value of [fld_dyn_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     Fields The current object (for fluent API support)
	 */
	public function setFldDynUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->fld_dyn_uid !== $v) {
			$this->fld_dyn_uid = $v;
			$this->modifiedColumns[] = FieldsPeer::FLD_DYN_UID;
		}

		return $this;
	} // setFldDynUid()

	/**
	 * Set the value of [fld_filter] column.
	 * 
	 * @param      int $v new value
	 * @return     Fields The current object (for fluent API support)
	 */
	public function setFldFilter($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->fld_filter !== $v) {
			$this->fld_filter = $v;
			$this->modifiedColumns[] = FieldsPeer::FLD_FILTER;
		}

		return $this;
	} // setFldFilter()

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
			if ($this->fld_uid !== '') {
				return false;
			}

			if ($this->add_tab_uid !== '') {
				return false;
			}

			if ($this->fld_index !== 1) {
				return false;
			}

			if ($this->fld_name !== '') {
				return false;
			}

			if ($this->fld_type !== '') {
				return false;
			}

			if ($this->fld_size !== 0) {
				return false;
			}

			if ($this->fld_null !== 1) {
				return false;
			}

			if ($this->fld_auto_increment !== 0) {
				return false;
			}

			if ($this->fld_key !== 0) {
				return false;
			}

			if ($this->fld_foreign_key !== 0) {
				return false;
			}

			if ($this->fld_foreign_key_table !== '') {
				return false;
			}

			if ($this->fld_dyn_name !== '') {
				return false;
			}

			if ($this->fld_dyn_uid !== '') {
				return false;
			}

			if ($this->fld_filter !== 0) {
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

			$this->fld_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->add_tab_uid = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->fld_index = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->fld_name = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->fld_description = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->fld_type = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->fld_size = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->fld_null = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->fld_auto_increment = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->fld_key = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->fld_foreign_key = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->fld_foreign_key_table = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->fld_dyn_name = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->fld_dyn_uid = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->fld_filter = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 15; // 15 = FieldsPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating Fields object", $e);
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
			$con = Propel::getConnection(FieldsPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = FieldsPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(FieldsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = FieldsQuery::create()
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
			$con = Propel::getConnection(FieldsPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				FieldsPeer::addInstanceToPool($this);
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
					$affectedRows = FieldsPeer::doUpdate($this, $con);
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


			if (($retval = FieldsPeer::doValidate($this, $columns)) !== true) {
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
		$pos = FieldsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getFldUid();
				break;
			case 1:
				return $this->getAddTabUid();
				break;
			case 2:
				return $this->getFldIndex();
				break;
			case 3:
				return $this->getFldName();
				break;
			case 4:
				return $this->getFldDescription();
				break;
			case 5:
				return $this->getFldType();
				break;
			case 6:
				return $this->getFldSize();
				break;
			case 7:
				return $this->getFldNull();
				break;
			case 8:
				return $this->getFldAutoIncrement();
				break;
			case 9:
				return $this->getFldKey();
				break;
			case 10:
				return $this->getFldForeignKey();
				break;
			case 11:
				return $this->getFldForeignKeyTable();
				break;
			case 12:
				return $this->getFldDynName();
				break;
			case 13:
				return $this->getFldDynUid();
				break;
			case 14:
				return $this->getFldFilter();
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
		if (isset($alreadyDumpedObjects['Fields'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['Fields'][$this->getPrimaryKey()] = true;
		$keys = FieldsPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getFldUid(),
			$keys[1] => $this->getAddTabUid(),
			$keys[2] => $this->getFldIndex(),
			$keys[3] => $this->getFldName(),
			$keys[4] => $this->getFldDescription(),
			$keys[5] => $this->getFldType(),
			$keys[6] => $this->getFldSize(),
			$keys[7] => $this->getFldNull(),
			$keys[8] => $this->getFldAutoIncrement(),
			$keys[9] => $this->getFldKey(),
			$keys[10] => $this->getFldForeignKey(),
			$keys[11] => $this->getFldForeignKeyTable(),
			$keys[12] => $this->getFldDynName(),
			$keys[13] => $this->getFldDynUid(),
			$keys[14] => $this->getFldFilter(),
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
		$pos = FieldsPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setFldUid($value);
				break;
			case 1:
				$this->setAddTabUid($value);
				break;
			case 2:
				$this->setFldIndex($value);
				break;
			case 3:
				$this->setFldName($value);
				break;
			case 4:
				$this->setFldDescription($value);
				break;
			case 5:
				$this->setFldType($value);
				break;
			case 6:
				$this->setFldSize($value);
				break;
			case 7:
				$this->setFldNull($value);
				break;
			case 8:
				$this->setFldAutoIncrement($value);
				break;
			case 9:
				$this->setFldKey($value);
				break;
			case 10:
				$this->setFldForeignKey($value);
				break;
			case 11:
				$this->setFldForeignKeyTable($value);
				break;
			case 12:
				$this->setFldDynName($value);
				break;
			case 13:
				$this->setFldDynUid($value);
				break;
			case 14:
				$this->setFldFilter($value);
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
		$keys = FieldsPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setFldUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAddTabUid($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setFldIndex($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setFldName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setFldDescription($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setFldType($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setFldSize($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setFldNull($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setFldAutoIncrement($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setFldKey($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setFldForeignKey($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setFldForeignKeyTable($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setFldDynName($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setFldDynUid($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setFldFilter($arr[$keys[14]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(FieldsPeer::DATABASE_NAME);

		if ($this->isColumnModified(FieldsPeer::FLD_UID)) $criteria->add(FieldsPeer::FLD_UID, $this->fld_uid);
		if ($this->isColumnModified(FieldsPeer::ADD_TAB_UID)) $criteria->add(FieldsPeer::ADD_TAB_UID, $this->add_tab_uid);
		if ($this->isColumnModified(FieldsPeer::FLD_INDEX)) $criteria->add(FieldsPeer::FLD_INDEX, $this->fld_index);
		if ($this->isColumnModified(FieldsPeer::FLD_NAME)) $criteria->add(FieldsPeer::FLD_NAME, $this->fld_name);
		if ($this->isColumnModified(FieldsPeer::FLD_DESCRIPTION)) $criteria->add(FieldsPeer::FLD_DESCRIPTION, $this->fld_description);
		if ($this->isColumnModified(FieldsPeer::FLD_TYPE)) $criteria->add(FieldsPeer::FLD_TYPE, $this->fld_type);
		if ($this->isColumnModified(FieldsPeer::FLD_SIZE)) $criteria->add(FieldsPeer::FLD_SIZE, $this->fld_size);
		if ($this->isColumnModified(FieldsPeer::FLD_NULL)) $criteria->add(FieldsPeer::FLD_NULL, $this->fld_null);
		if ($this->isColumnModified(FieldsPeer::FLD_AUTO_INCREMENT)) $criteria->add(FieldsPeer::FLD_AUTO_INCREMENT, $this->fld_auto_increment);
		if ($this->isColumnModified(FieldsPeer::FLD_KEY)) $criteria->add(FieldsPeer::FLD_KEY, $this->fld_key);
		if ($this->isColumnModified(FieldsPeer::FLD_FOREIGN_KEY)) $criteria->add(FieldsPeer::FLD_FOREIGN_KEY, $this->fld_foreign_key);
		if ($this->isColumnModified(FieldsPeer::FLD_FOREIGN_KEY_TABLE)) $criteria->add(FieldsPeer::FLD_FOREIGN_KEY_TABLE, $this->fld_foreign_key_table);
		if ($this->isColumnModified(FieldsPeer::FLD_DYN_NAME)) $criteria->add(FieldsPeer::FLD_DYN_NAME, $this->fld_dyn_name);
		if ($this->isColumnModified(FieldsPeer::FLD_DYN_UID)) $criteria->add(FieldsPeer::FLD_DYN_UID, $this->fld_dyn_uid);
		if ($this->isColumnModified(FieldsPeer::FLD_FILTER)) $criteria->add(FieldsPeer::FLD_FILTER, $this->fld_filter);

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
		$criteria = new Criteria(FieldsPeer::DATABASE_NAME);
		$criteria->add(FieldsPeer::FLD_UID, $this->fld_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getFldUid();
	}

	/**
	 * Generic method to set the primary key (fld_uid column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setFldUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getFldUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of Fields (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setFldUid($this->getFldUid());
		$copyObj->setAddTabUid($this->getAddTabUid());
		$copyObj->setFldIndex($this->getFldIndex());
		$copyObj->setFldName($this->getFldName());
		$copyObj->setFldDescription($this->getFldDescription());
		$copyObj->setFldType($this->getFldType());
		$copyObj->setFldSize($this->getFldSize());
		$copyObj->setFldNull($this->getFldNull());
		$copyObj->setFldAutoIncrement($this->getFldAutoIncrement());
		$copyObj->setFldKey($this->getFldKey());
		$copyObj->setFldForeignKey($this->getFldForeignKey());
		$copyObj->setFldForeignKeyTable($this->getFldForeignKeyTable());
		$copyObj->setFldDynName($this->getFldDynName());
		$copyObj->setFldDynUid($this->getFldDynUid());
		$copyObj->setFldFilter($this->getFldFilter());
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
	 * @return     Fields Clone of current object.
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
	 * @return     FieldsPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new FieldsPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->fld_uid = null;
		$this->add_tab_uid = null;
		$this->fld_index = null;
		$this->fld_name = null;
		$this->fld_description = null;
		$this->fld_type = null;
		$this->fld_size = null;
		$this->fld_null = null;
		$this->fld_auto_increment = null;
		$this->fld_key = null;
		$this->fld_foreign_key = null;
		$this->fld_foreign_key_table = null;
		$this->fld_dyn_name = null;
		$this->fld_dyn_uid = null;
		$this->fld_filter = null;
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
		return (string) $this->exportTo(FieldsPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseFields
