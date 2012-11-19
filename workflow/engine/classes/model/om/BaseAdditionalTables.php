<?php


/**
 * Base class that represents a row from the 'ADDITIONAL_TABLES' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAdditionalTables extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'AdditionalTablesPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        AdditionalTablesPeer
	 */
	protected static $peer;

	/**
	 * The value for the add_tab_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $add_tab_uid;

	/**
	 * The value for the add_tab_name field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $add_tab_name;

	/**
	 * The value for the add_tab_class_name field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $add_tab_class_name;

	/**
	 * The value for the add_tab_description field.
	 * @var        string
	 */
	protected $add_tab_description;

	/**
	 * The value for the add_tab_sdw_log_insert field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $add_tab_sdw_log_insert;

	/**
	 * The value for the add_tab_sdw_log_update field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $add_tab_sdw_log_update;

	/**
	 * The value for the add_tab_sdw_log_delete field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $add_tab_sdw_log_delete;

	/**
	 * The value for the add_tab_sdw_log_select field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $add_tab_sdw_log_select;

	/**
	 * The value for the add_tab_sdw_max_length field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $add_tab_sdw_max_length;

	/**
	 * The value for the add_tab_sdw_auto_delete field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $add_tab_sdw_auto_delete;

	/**
	 * The value for the add_tab_plg_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $add_tab_plg_uid;

	/**
	 * The value for the dbs_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $dbs_uid;

	/**
	 * The value for the pro_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $pro_uid;

	/**
	 * The value for the add_tab_type field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $add_tab_type;

	/**
	 * The value for the add_tab_grid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $add_tab_grid;

	/**
	 * The value for the add_tab_tag field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $add_tab_tag;

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
		$this->add_tab_uid = '';
		$this->add_tab_name = '';
		$this->add_tab_class_name = '';
		$this->add_tab_sdw_log_insert = 0;
		$this->add_tab_sdw_log_update = 0;
		$this->add_tab_sdw_log_delete = 0;
		$this->add_tab_sdw_log_select = 0;
		$this->add_tab_sdw_max_length = 0;
		$this->add_tab_sdw_auto_delete = 0;
		$this->add_tab_plg_uid = '';
		$this->dbs_uid = '';
		$this->pro_uid = '';
		$this->add_tab_type = '';
		$this->add_tab_grid = '';
		$this->add_tab_tag = '';
	}

	/**
	 * Initializes internal state of BaseAdditionalTables object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
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
	 * Get the [add_tab_name] column value.
	 * 
	 * @return     string
	 */
	public function getAddTabName()
	{
		return $this->add_tab_name;
	}

	/**
	 * Get the [add_tab_class_name] column value.
	 * 
	 * @return     string
	 */
	public function getAddTabClassName()
	{
		return $this->add_tab_class_name;
	}

	/**
	 * Get the [add_tab_description] column value.
	 * 
	 * @return     string
	 */
	public function getAddTabDescription()
	{
		return $this->add_tab_description;
	}

	/**
	 * Get the [add_tab_sdw_log_insert] column value.
	 * 
	 * @return     int
	 */
	public function getAddTabSdwLogInsert()
	{
		return $this->add_tab_sdw_log_insert;
	}

	/**
	 * Get the [add_tab_sdw_log_update] column value.
	 * 
	 * @return     int
	 */
	public function getAddTabSdwLogUpdate()
	{
		return $this->add_tab_sdw_log_update;
	}

	/**
	 * Get the [add_tab_sdw_log_delete] column value.
	 * 
	 * @return     int
	 */
	public function getAddTabSdwLogDelete()
	{
		return $this->add_tab_sdw_log_delete;
	}

	/**
	 * Get the [add_tab_sdw_log_select] column value.
	 * 
	 * @return     int
	 */
	public function getAddTabSdwLogSelect()
	{
		return $this->add_tab_sdw_log_select;
	}

	/**
	 * Get the [add_tab_sdw_max_length] column value.
	 * 
	 * @return     int
	 */
	public function getAddTabSdwMaxLength()
	{
		return $this->add_tab_sdw_max_length;
	}

	/**
	 * Get the [add_tab_sdw_auto_delete] column value.
	 * 
	 * @return     int
	 */
	public function getAddTabSdwAutoDelete()
	{
		return $this->add_tab_sdw_auto_delete;
	}

	/**
	 * Get the [add_tab_plg_uid] column value.
	 * 
	 * @return     string
	 */
	public function getAddTabPlgUid()
	{
		return $this->add_tab_plg_uid;
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
	 * Get the [add_tab_type] column value.
	 * 
	 * @return     string
	 */
	public function getAddTabType()
	{
		return $this->add_tab_type;
	}

	/**
	 * Get the [add_tab_grid] column value.
	 * 
	 * @return     string
	 */
	public function getAddTabGrid()
	{
		return $this->add_tab_grid;
	}

	/**
	 * Get the [add_tab_tag] column value.
	 * 
	 * @return     string
	 */
	public function getAddTabTag()
	{
		return $this->add_tab_tag;
	}

	/**
	 * Set the value of [add_tab_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AdditionalTables The current object (for fluent API support)
	 */
	public function setAddTabUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->add_tab_uid !== $v) {
			$this->add_tab_uid = $v;
			$this->modifiedColumns[] = AdditionalTablesPeer::ADD_TAB_UID;
		}

		return $this;
	} // setAddTabUid()

	/**
	 * Set the value of [add_tab_name] column.
	 * 
	 * @param      string $v new value
	 * @return     AdditionalTables The current object (for fluent API support)
	 */
	public function setAddTabName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->add_tab_name !== $v) {
			$this->add_tab_name = $v;
			$this->modifiedColumns[] = AdditionalTablesPeer::ADD_TAB_NAME;
		}

		return $this;
	} // setAddTabName()

	/**
	 * Set the value of [add_tab_class_name] column.
	 * 
	 * @param      string $v new value
	 * @return     AdditionalTables The current object (for fluent API support)
	 */
	public function setAddTabClassName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->add_tab_class_name !== $v) {
			$this->add_tab_class_name = $v;
			$this->modifiedColumns[] = AdditionalTablesPeer::ADD_TAB_CLASS_NAME;
		}

		return $this;
	} // setAddTabClassName()

	/**
	 * Set the value of [add_tab_description] column.
	 * 
	 * @param      string $v new value
	 * @return     AdditionalTables The current object (for fluent API support)
	 */
	public function setAddTabDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->add_tab_description !== $v) {
			$this->add_tab_description = $v;
			$this->modifiedColumns[] = AdditionalTablesPeer::ADD_TAB_DESCRIPTION;
		}

		return $this;
	} // setAddTabDescription()

	/**
	 * Set the value of [add_tab_sdw_log_insert] column.
	 * 
	 * @param      int $v new value
	 * @return     AdditionalTables The current object (for fluent API support)
	 */
	public function setAddTabSdwLogInsert($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->add_tab_sdw_log_insert !== $v) {
			$this->add_tab_sdw_log_insert = $v;
			$this->modifiedColumns[] = AdditionalTablesPeer::ADD_TAB_SDW_LOG_INSERT;
		}

		return $this;
	} // setAddTabSdwLogInsert()

	/**
	 * Set the value of [add_tab_sdw_log_update] column.
	 * 
	 * @param      int $v new value
	 * @return     AdditionalTables The current object (for fluent API support)
	 */
	public function setAddTabSdwLogUpdate($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->add_tab_sdw_log_update !== $v) {
			$this->add_tab_sdw_log_update = $v;
			$this->modifiedColumns[] = AdditionalTablesPeer::ADD_TAB_SDW_LOG_UPDATE;
		}

		return $this;
	} // setAddTabSdwLogUpdate()

	/**
	 * Set the value of [add_tab_sdw_log_delete] column.
	 * 
	 * @param      int $v new value
	 * @return     AdditionalTables The current object (for fluent API support)
	 */
	public function setAddTabSdwLogDelete($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->add_tab_sdw_log_delete !== $v) {
			$this->add_tab_sdw_log_delete = $v;
			$this->modifiedColumns[] = AdditionalTablesPeer::ADD_TAB_SDW_LOG_DELETE;
		}

		return $this;
	} // setAddTabSdwLogDelete()

	/**
	 * Set the value of [add_tab_sdw_log_select] column.
	 * 
	 * @param      int $v new value
	 * @return     AdditionalTables The current object (for fluent API support)
	 */
	public function setAddTabSdwLogSelect($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->add_tab_sdw_log_select !== $v) {
			$this->add_tab_sdw_log_select = $v;
			$this->modifiedColumns[] = AdditionalTablesPeer::ADD_TAB_SDW_LOG_SELECT;
		}

		return $this;
	} // setAddTabSdwLogSelect()

	/**
	 * Set the value of [add_tab_sdw_max_length] column.
	 * 
	 * @param      int $v new value
	 * @return     AdditionalTables The current object (for fluent API support)
	 */
	public function setAddTabSdwMaxLength($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->add_tab_sdw_max_length !== $v) {
			$this->add_tab_sdw_max_length = $v;
			$this->modifiedColumns[] = AdditionalTablesPeer::ADD_TAB_SDW_MAX_LENGTH;
		}

		return $this;
	} // setAddTabSdwMaxLength()

	/**
	 * Set the value of [add_tab_sdw_auto_delete] column.
	 * 
	 * @param      int $v new value
	 * @return     AdditionalTables The current object (for fluent API support)
	 */
	public function setAddTabSdwAutoDelete($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->add_tab_sdw_auto_delete !== $v) {
			$this->add_tab_sdw_auto_delete = $v;
			$this->modifiedColumns[] = AdditionalTablesPeer::ADD_TAB_SDW_AUTO_DELETE;
		}

		return $this;
	} // setAddTabSdwAutoDelete()

	/**
	 * Set the value of [add_tab_plg_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AdditionalTables The current object (for fluent API support)
	 */
	public function setAddTabPlgUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->add_tab_plg_uid !== $v) {
			$this->add_tab_plg_uid = $v;
			$this->modifiedColumns[] = AdditionalTablesPeer::ADD_TAB_PLG_UID;
		}

		return $this;
	} // setAddTabPlgUid()

	/**
	 * Set the value of [dbs_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AdditionalTables The current object (for fluent API support)
	 */
	public function setDbsUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->dbs_uid !== $v) {
			$this->dbs_uid = $v;
			$this->modifiedColumns[] = AdditionalTablesPeer::DBS_UID;
		}

		return $this;
	} // setDbsUid()

	/**
	 * Set the value of [pro_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AdditionalTables The current object (for fluent API support)
	 */
	public function setProUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pro_uid !== $v) {
			$this->pro_uid = $v;
			$this->modifiedColumns[] = AdditionalTablesPeer::PRO_UID;
		}

		return $this;
	} // setProUid()

	/**
	 * Set the value of [add_tab_type] column.
	 * 
	 * @param      string $v new value
	 * @return     AdditionalTables The current object (for fluent API support)
	 */
	public function setAddTabType($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->add_tab_type !== $v) {
			$this->add_tab_type = $v;
			$this->modifiedColumns[] = AdditionalTablesPeer::ADD_TAB_TYPE;
		}

		return $this;
	} // setAddTabType()

	/**
	 * Set the value of [add_tab_grid] column.
	 * 
	 * @param      string $v new value
	 * @return     AdditionalTables The current object (for fluent API support)
	 */
	public function setAddTabGrid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->add_tab_grid !== $v) {
			$this->add_tab_grid = $v;
			$this->modifiedColumns[] = AdditionalTablesPeer::ADD_TAB_GRID;
		}

		return $this;
	} // setAddTabGrid()

	/**
	 * Set the value of [add_tab_tag] column.
	 * 
	 * @param      string $v new value
	 * @return     AdditionalTables The current object (for fluent API support)
	 */
	public function setAddTabTag($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->add_tab_tag !== $v) {
			$this->add_tab_tag = $v;
			$this->modifiedColumns[] = AdditionalTablesPeer::ADD_TAB_TAG;
		}

		return $this;
	} // setAddTabTag()

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
			if ($this->add_tab_uid !== '') {
				return false;
			}

			if ($this->add_tab_name !== '') {
				return false;
			}

			if ($this->add_tab_class_name !== '') {
				return false;
			}

			if ($this->add_tab_sdw_log_insert !== 0) {
				return false;
			}

			if ($this->add_tab_sdw_log_update !== 0) {
				return false;
			}

			if ($this->add_tab_sdw_log_delete !== 0) {
				return false;
			}

			if ($this->add_tab_sdw_log_select !== 0) {
				return false;
			}

			if ($this->add_tab_sdw_max_length !== 0) {
				return false;
			}

			if ($this->add_tab_sdw_auto_delete !== 0) {
				return false;
			}

			if ($this->add_tab_plg_uid !== '') {
				return false;
			}

			if ($this->dbs_uid !== '') {
				return false;
			}

			if ($this->pro_uid !== '') {
				return false;
			}

			if ($this->add_tab_type !== '') {
				return false;
			}

			if ($this->add_tab_grid !== '') {
				return false;
			}

			if ($this->add_tab_tag !== '') {
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

			$this->add_tab_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->add_tab_name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->add_tab_class_name = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->add_tab_description = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->add_tab_sdw_log_insert = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->add_tab_sdw_log_update = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->add_tab_sdw_log_delete = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->add_tab_sdw_log_select = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->add_tab_sdw_max_length = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->add_tab_sdw_auto_delete = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->add_tab_plg_uid = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->dbs_uid = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->pro_uid = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->add_tab_type = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->add_tab_grid = ($row[$startcol + 14] !== null) ? (string) $row[$startcol + 14] : null;
			$this->add_tab_tag = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 16; // 16 = AdditionalTablesPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating AdditionalTables object", $e);
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
			$con = Propel::getConnection(AdditionalTablesPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = AdditionalTablesPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(AdditionalTablesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = AdditionalTablesQuery::create()
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
			$con = Propel::getConnection(AdditionalTablesPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				AdditionalTablesPeer::addInstanceToPool($this);
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
					$affectedRows = AdditionalTablesPeer::doUpdate($this, $con);
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


			if (($retval = AdditionalTablesPeer::doValidate($this, $columns)) !== true) {
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
		$pos = AdditionalTablesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getAddTabUid();
				break;
			case 1:
				return $this->getAddTabName();
				break;
			case 2:
				return $this->getAddTabClassName();
				break;
			case 3:
				return $this->getAddTabDescription();
				break;
			case 4:
				return $this->getAddTabSdwLogInsert();
				break;
			case 5:
				return $this->getAddTabSdwLogUpdate();
				break;
			case 6:
				return $this->getAddTabSdwLogDelete();
				break;
			case 7:
				return $this->getAddTabSdwLogSelect();
				break;
			case 8:
				return $this->getAddTabSdwMaxLength();
				break;
			case 9:
				return $this->getAddTabSdwAutoDelete();
				break;
			case 10:
				return $this->getAddTabPlgUid();
				break;
			case 11:
				return $this->getDbsUid();
				break;
			case 12:
				return $this->getProUid();
				break;
			case 13:
				return $this->getAddTabType();
				break;
			case 14:
				return $this->getAddTabGrid();
				break;
			case 15:
				return $this->getAddTabTag();
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
		if (isset($alreadyDumpedObjects['AdditionalTables'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['AdditionalTables'][$this->getPrimaryKey()] = true;
		$keys = AdditionalTablesPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getAddTabUid(),
			$keys[1] => $this->getAddTabName(),
			$keys[2] => $this->getAddTabClassName(),
			$keys[3] => $this->getAddTabDescription(),
			$keys[4] => $this->getAddTabSdwLogInsert(),
			$keys[5] => $this->getAddTabSdwLogUpdate(),
			$keys[6] => $this->getAddTabSdwLogDelete(),
			$keys[7] => $this->getAddTabSdwLogSelect(),
			$keys[8] => $this->getAddTabSdwMaxLength(),
			$keys[9] => $this->getAddTabSdwAutoDelete(),
			$keys[10] => $this->getAddTabPlgUid(),
			$keys[11] => $this->getDbsUid(),
			$keys[12] => $this->getProUid(),
			$keys[13] => $this->getAddTabType(),
			$keys[14] => $this->getAddTabGrid(),
			$keys[15] => $this->getAddTabTag(),
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
		$pos = AdditionalTablesPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setAddTabUid($value);
				break;
			case 1:
				$this->setAddTabName($value);
				break;
			case 2:
				$this->setAddTabClassName($value);
				break;
			case 3:
				$this->setAddTabDescription($value);
				break;
			case 4:
				$this->setAddTabSdwLogInsert($value);
				break;
			case 5:
				$this->setAddTabSdwLogUpdate($value);
				break;
			case 6:
				$this->setAddTabSdwLogDelete($value);
				break;
			case 7:
				$this->setAddTabSdwLogSelect($value);
				break;
			case 8:
				$this->setAddTabSdwMaxLength($value);
				break;
			case 9:
				$this->setAddTabSdwAutoDelete($value);
				break;
			case 10:
				$this->setAddTabPlgUid($value);
				break;
			case 11:
				$this->setDbsUid($value);
				break;
			case 12:
				$this->setProUid($value);
				break;
			case 13:
				$this->setAddTabType($value);
				break;
			case 14:
				$this->setAddTabGrid($value);
				break;
			case 15:
				$this->setAddTabTag($value);
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
		$keys = AdditionalTablesPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setAddTabUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAddTabName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAddTabClassName($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAddTabDescription($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAddTabSdwLogInsert($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAddTabSdwLogUpdate($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setAddTabSdwLogDelete($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setAddTabSdwLogSelect($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAddTabSdwMaxLength($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setAddTabSdwAutoDelete($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAddTabPlgUid($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setDbsUid($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setProUid($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setAddTabType($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setAddTabGrid($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setAddTabTag($arr[$keys[15]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(AdditionalTablesPeer::DATABASE_NAME);

		if ($this->isColumnModified(AdditionalTablesPeer::ADD_TAB_UID)) $criteria->add(AdditionalTablesPeer::ADD_TAB_UID, $this->add_tab_uid);
		if ($this->isColumnModified(AdditionalTablesPeer::ADD_TAB_NAME)) $criteria->add(AdditionalTablesPeer::ADD_TAB_NAME, $this->add_tab_name);
		if ($this->isColumnModified(AdditionalTablesPeer::ADD_TAB_CLASS_NAME)) $criteria->add(AdditionalTablesPeer::ADD_TAB_CLASS_NAME, $this->add_tab_class_name);
		if ($this->isColumnModified(AdditionalTablesPeer::ADD_TAB_DESCRIPTION)) $criteria->add(AdditionalTablesPeer::ADD_TAB_DESCRIPTION, $this->add_tab_description);
		if ($this->isColumnModified(AdditionalTablesPeer::ADD_TAB_SDW_LOG_INSERT)) $criteria->add(AdditionalTablesPeer::ADD_TAB_SDW_LOG_INSERT, $this->add_tab_sdw_log_insert);
		if ($this->isColumnModified(AdditionalTablesPeer::ADD_TAB_SDW_LOG_UPDATE)) $criteria->add(AdditionalTablesPeer::ADD_TAB_SDW_LOG_UPDATE, $this->add_tab_sdw_log_update);
		if ($this->isColumnModified(AdditionalTablesPeer::ADD_TAB_SDW_LOG_DELETE)) $criteria->add(AdditionalTablesPeer::ADD_TAB_SDW_LOG_DELETE, $this->add_tab_sdw_log_delete);
		if ($this->isColumnModified(AdditionalTablesPeer::ADD_TAB_SDW_LOG_SELECT)) $criteria->add(AdditionalTablesPeer::ADD_TAB_SDW_LOG_SELECT, $this->add_tab_sdw_log_select);
		if ($this->isColumnModified(AdditionalTablesPeer::ADD_TAB_SDW_MAX_LENGTH)) $criteria->add(AdditionalTablesPeer::ADD_TAB_SDW_MAX_LENGTH, $this->add_tab_sdw_max_length);
		if ($this->isColumnModified(AdditionalTablesPeer::ADD_TAB_SDW_AUTO_DELETE)) $criteria->add(AdditionalTablesPeer::ADD_TAB_SDW_AUTO_DELETE, $this->add_tab_sdw_auto_delete);
		if ($this->isColumnModified(AdditionalTablesPeer::ADD_TAB_PLG_UID)) $criteria->add(AdditionalTablesPeer::ADD_TAB_PLG_UID, $this->add_tab_plg_uid);
		if ($this->isColumnModified(AdditionalTablesPeer::DBS_UID)) $criteria->add(AdditionalTablesPeer::DBS_UID, $this->dbs_uid);
		if ($this->isColumnModified(AdditionalTablesPeer::PRO_UID)) $criteria->add(AdditionalTablesPeer::PRO_UID, $this->pro_uid);
		if ($this->isColumnModified(AdditionalTablesPeer::ADD_TAB_TYPE)) $criteria->add(AdditionalTablesPeer::ADD_TAB_TYPE, $this->add_tab_type);
		if ($this->isColumnModified(AdditionalTablesPeer::ADD_TAB_GRID)) $criteria->add(AdditionalTablesPeer::ADD_TAB_GRID, $this->add_tab_grid);
		if ($this->isColumnModified(AdditionalTablesPeer::ADD_TAB_TAG)) $criteria->add(AdditionalTablesPeer::ADD_TAB_TAG, $this->add_tab_tag);

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
		$criteria = new Criteria(AdditionalTablesPeer::DATABASE_NAME);
		$criteria->add(AdditionalTablesPeer::ADD_TAB_UID, $this->add_tab_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getAddTabUid();
	}

	/**
	 * Generic method to set the primary key (add_tab_uid column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setAddTabUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getAddTabUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of AdditionalTables (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setAddTabUid($this->getAddTabUid());
		$copyObj->setAddTabName($this->getAddTabName());
		$copyObj->setAddTabClassName($this->getAddTabClassName());
		$copyObj->setAddTabDescription($this->getAddTabDescription());
		$copyObj->setAddTabSdwLogInsert($this->getAddTabSdwLogInsert());
		$copyObj->setAddTabSdwLogUpdate($this->getAddTabSdwLogUpdate());
		$copyObj->setAddTabSdwLogDelete($this->getAddTabSdwLogDelete());
		$copyObj->setAddTabSdwLogSelect($this->getAddTabSdwLogSelect());
		$copyObj->setAddTabSdwMaxLength($this->getAddTabSdwMaxLength());
		$copyObj->setAddTabSdwAutoDelete($this->getAddTabSdwAutoDelete());
		$copyObj->setAddTabPlgUid($this->getAddTabPlgUid());
		$copyObj->setDbsUid($this->getDbsUid());
		$copyObj->setProUid($this->getProUid());
		$copyObj->setAddTabType($this->getAddTabType());
		$copyObj->setAddTabGrid($this->getAddTabGrid());
		$copyObj->setAddTabTag($this->getAddTabTag());
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
	 * @return     AdditionalTables Clone of current object.
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
	 * @return     AdditionalTablesPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new AdditionalTablesPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->add_tab_uid = null;
		$this->add_tab_name = null;
		$this->add_tab_class_name = null;
		$this->add_tab_description = null;
		$this->add_tab_sdw_log_insert = null;
		$this->add_tab_sdw_log_update = null;
		$this->add_tab_sdw_log_delete = null;
		$this->add_tab_sdw_log_select = null;
		$this->add_tab_sdw_max_length = null;
		$this->add_tab_sdw_auto_delete = null;
		$this->add_tab_plg_uid = null;
		$this->dbs_uid = null;
		$this->pro_uid = null;
		$this->add_tab_type = null;
		$this->add_tab_grid = null;
		$this->add_tab_tag = null;
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
		return (string) $this->exportTo(AdditionalTablesPeer::DEFAULT_STRING_FORMAT);
	}

} // BaseAdditionalTables
