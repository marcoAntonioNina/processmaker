<?php

 //PHP5ObjectBuilder.php
/**
 * Base class that represents a row from the 'AUTHENTICATION_SOURCE' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseAuthenticationSource extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'AuthenticationSourcePeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        AuthenticationSourcePeer
	 */
	protected static $peer;

	/**
	 * The value for the auth_source_uid field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $auth_source_uid;

	/**
	 * The value for the auth_source_name field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $auth_source_name;

	/**
	 * The value for the auth_source_provider field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $auth_source_provider;

	/**
	 * The value for the auth_source_server_name field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $auth_source_server_name;

	/**
	 * The value for the auth_source_port field.
	 * Note: this column has a database default value of: 389
	 * @var        int
	 */
	protected $auth_source_port;

	/**
	 * The value for the auth_source_enabled_tls field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $auth_source_enabled_tls;

	/**
	 * The value for the auth_source_version field.
	 * Note: this column has a database default value of: '3'
	 * @var        string
	 */
	protected $auth_source_version;

	/**
	 * The value for the auth_source_base_dn field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $auth_source_base_dn;

	/**
	 * The value for the auth_anonymous field.
	 * Note: this column has a database default value of: 0
	 * @var        int
	 */
	protected $auth_anonymous;

	/**
	 * The value for the auth_source_search_user field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $auth_source_search_user;

	/**
	 * The value for the auth_source_password field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $auth_source_password;

	/**
	 * The value for the auth_source_attributes field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $auth_source_attributes;

	/**
	 * The value for the auth_source_object_classes field.
	 * Note: this column has a database default value of: ''
	 * @var        string
	 */
	protected $auth_source_object_classes;

	/**
	 * The value for the auth_source_data field.
	 * @var        string
	 */
	protected $auth_source_data;

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
		$this->auth_source_uid = '';
		$this->auth_source_name = '';
		$this->auth_source_provider = '';
		$this->auth_source_server_name = '';
		$this->auth_source_port = 389;
		$this->auth_source_enabled_tls = 0;
		$this->auth_source_version = '3';
		$this->auth_source_base_dn = '';
		$this->auth_anonymous = 0;
		$this->auth_source_search_user = '';
		$this->auth_source_password = '';
		$this->auth_source_attributes = '';
		$this->auth_source_object_classes = '';
	}

	/**
	 * Initializes internal state of BaseAuthenticationSource object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Get the [auth_source_uid] column value.
	 * 
	 * @return     string
	 */
	public function getAuthSourceUid()
	{
		return $this->auth_source_uid;
	}

	/**
	 * Get the [auth_source_name] column value.
	 * 
	 * @return     string
	 */
	public function getAuthSourceName()
	{
		return $this->auth_source_name;
	}

	/**
	 * Get the [auth_source_provider] column value.
	 * 
	 * @return     string
	 */
	public function getAuthSourceProvider()
	{
		return $this->auth_source_provider;
	}

	/**
	 * Get the [auth_source_server_name] column value.
	 * 
	 * @return     string
	 */
	public function getAuthSourceServerName()
	{
		return $this->auth_source_server_name;
	}

	/**
	 * Get the [auth_source_port] column value.
	 * 
	 * @return     int
	 */
	public function getAuthSourcePort()
	{
		return $this->auth_source_port;
	}

	/**
	 * Get the [auth_source_enabled_tls] column value.
	 * 
	 * @return     int
	 */
	public function getAuthSourceEnabledTls()
	{
		return $this->auth_source_enabled_tls;
	}

	/**
	 * Get the [auth_source_version] column value.
	 * 
	 * @return     string
	 */
	public function getAuthSourceVersion()
	{
		return $this->auth_source_version;
	}

	/**
	 * Get the [auth_source_base_dn] column value.
	 * 
	 * @return     string
	 */
	public function getAuthSourceBaseDn()
	{
		return $this->auth_source_base_dn;
	}

	/**
	 * Get the [auth_anonymous] column value.
	 * 
	 * @return     int
	 */
	public function getAuthAnonymous()
	{
		return $this->auth_anonymous;
	}

	/**
	 * Get the [auth_source_search_user] column value.
	 * 
	 * @return     string
	 */
	public function getAuthSourceSearchUser()
	{
		return $this->auth_source_search_user;
	}

	/**
	 * Get the [auth_source_password] column value.
	 * 
	 * @return     string
	 */
	public function getAuthSourcePassword()
	{
		return $this->auth_source_password;
	}

	/**
	 * Get the [auth_source_attributes] column value.
	 * 
	 * @return     string
	 */
	public function getAuthSourceAttributes()
	{
		return $this->auth_source_attributes;
	}

	/**
	 * Get the [auth_source_object_classes] column value.
	 * 
	 * @return     string
	 */
	public function getAuthSourceObjectClasses()
	{
		return $this->auth_source_object_classes;
	}

	/**
	 * Get the [auth_source_data] column value.
	 * 
	 * @return     string
	 */
	public function getAuthSourceData()
	{
		return $this->auth_source_data;
	}

	/**
	 * Set the value of [auth_source_uid] column.
	 * 
	 * @param      string $v new value
	 * @return     AuthenticationSource The current object (for fluent API support)
	 */
	public function setAuthSourceUid($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->auth_source_uid !== $v) {
			$this->auth_source_uid = $v;
			$this->modifiedColumns[] = AuthenticationSourcePeer::AUTH_SOURCE_UID;
		}

		return $this;
	} // setAuthSourceUid()

	/**
	 * Set the value of [auth_source_name] column.
	 * 
	 * @param      string $v new value
	 * @return     AuthenticationSource The current object (for fluent API support)
	 */
	public function setAuthSourceName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->auth_source_name !== $v) {
			$this->auth_source_name = $v;
			$this->modifiedColumns[] = AuthenticationSourcePeer::AUTH_SOURCE_NAME;
		}

		return $this;
	} // setAuthSourceName()

	/**
	 * Set the value of [auth_source_provider] column.
	 * 
	 * @param      string $v new value
	 * @return     AuthenticationSource The current object (for fluent API support)
	 */
	public function setAuthSourceProvider($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->auth_source_provider !== $v) {
			$this->auth_source_provider = $v;
			$this->modifiedColumns[] = AuthenticationSourcePeer::AUTH_SOURCE_PROVIDER;
		}

		return $this;
	} // setAuthSourceProvider()

	/**
	 * Set the value of [auth_source_server_name] column.
	 * 
	 * @param      string $v new value
	 * @return     AuthenticationSource The current object (for fluent API support)
	 */
	public function setAuthSourceServerName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->auth_source_server_name !== $v) {
			$this->auth_source_server_name = $v;
			$this->modifiedColumns[] = AuthenticationSourcePeer::AUTH_SOURCE_SERVER_NAME;
		}

		return $this;
	} // setAuthSourceServerName()

	/**
	 * Set the value of [auth_source_port] column.
	 * 
	 * @param      int $v new value
	 * @return     AuthenticationSource The current object (for fluent API support)
	 */
	public function setAuthSourcePort($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->auth_source_port !== $v) {
			$this->auth_source_port = $v;
			$this->modifiedColumns[] = AuthenticationSourcePeer::AUTH_SOURCE_PORT;
		}

		return $this;
	} // setAuthSourcePort()

	/**
	 * Set the value of [auth_source_enabled_tls] column.
	 * 
	 * @param      int $v new value
	 * @return     AuthenticationSource The current object (for fluent API support)
	 */
	public function setAuthSourceEnabledTls($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->auth_source_enabled_tls !== $v) {
			$this->auth_source_enabled_tls = $v;
			$this->modifiedColumns[] = AuthenticationSourcePeer::AUTH_SOURCE_ENABLED_TLS;
		}

		return $this;
	} // setAuthSourceEnabledTls()

	/**
	 * Set the value of [auth_source_version] column.
	 * 
	 * @param      string $v new value
	 * @return     AuthenticationSource The current object (for fluent API support)
	 */
	public function setAuthSourceVersion($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->auth_source_version !== $v) {
			$this->auth_source_version = $v;
			$this->modifiedColumns[] = AuthenticationSourcePeer::AUTH_SOURCE_VERSION;
		}

		return $this;
	} // setAuthSourceVersion()

	/**
	 * Set the value of [auth_source_base_dn] column.
	 * 
	 * @param      string $v new value
	 * @return     AuthenticationSource The current object (for fluent API support)
	 */
	public function setAuthSourceBaseDn($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->auth_source_base_dn !== $v) {
			$this->auth_source_base_dn = $v;
			$this->modifiedColumns[] = AuthenticationSourcePeer::AUTH_SOURCE_BASE_DN;
		}

		return $this;
	} // setAuthSourceBaseDn()

	/**
	 * Set the value of [auth_anonymous] column.
	 * 
	 * @param      int $v new value
	 * @return     AuthenticationSource The current object (for fluent API support)
	 */
	public function setAuthAnonymous($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->auth_anonymous !== $v) {
			$this->auth_anonymous = $v;
			$this->modifiedColumns[] = AuthenticationSourcePeer::AUTH_ANONYMOUS;
		}

		return $this;
	} // setAuthAnonymous()

	/**
	 * Set the value of [auth_source_search_user] column.
	 * 
	 * @param      string $v new value
	 * @return     AuthenticationSource The current object (for fluent API support)
	 */
	public function setAuthSourceSearchUser($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->auth_source_search_user !== $v) {
			$this->auth_source_search_user = $v;
			$this->modifiedColumns[] = AuthenticationSourcePeer::AUTH_SOURCE_SEARCH_USER;
		}

		return $this;
	} // setAuthSourceSearchUser()

	/**
	 * Set the value of [auth_source_password] column.
	 * 
	 * @param      string $v new value
	 * @return     AuthenticationSource The current object (for fluent API support)
	 */
	public function setAuthSourcePassword($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->auth_source_password !== $v) {
			$this->auth_source_password = $v;
			$this->modifiedColumns[] = AuthenticationSourcePeer::AUTH_SOURCE_PASSWORD;
		}

		return $this;
	} // setAuthSourcePassword()

	/**
	 * Set the value of [auth_source_attributes] column.
	 * 
	 * @param      string $v new value
	 * @return     AuthenticationSource The current object (for fluent API support)
	 */
	public function setAuthSourceAttributes($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->auth_source_attributes !== $v) {
			$this->auth_source_attributes = $v;
			$this->modifiedColumns[] = AuthenticationSourcePeer::AUTH_SOURCE_ATTRIBUTES;
		}

		return $this;
	} // setAuthSourceAttributes()

	/**
	 * Set the value of [auth_source_object_classes] column.
	 * 
	 * @param      string $v new value
	 * @return     AuthenticationSource The current object (for fluent API support)
	 */
	public function setAuthSourceObjectClasses($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->auth_source_object_classes !== $v) {
			$this->auth_source_object_classes = $v;
			$this->modifiedColumns[] = AuthenticationSourcePeer::AUTH_SOURCE_OBJECT_CLASSES;
		}

		return $this;
	} // setAuthSourceObjectClasses()

	/**
	 * Set the value of [auth_source_data] column.
	 * 
	 * @param      string $v new value
	 * @return     AuthenticationSource The current object (for fluent API support)
	 */
	public function setAuthSourceData($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->auth_source_data !== $v) {
			$this->auth_source_data = $v;
			$this->modifiedColumns[] = AuthenticationSourcePeer::AUTH_SOURCE_DATA;
		}

		return $this;
	} // setAuthSourceData()

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
			if ($this->auth_source_uid !== '') {
				return false;
			}

			if ($this->auth_source_name !== '') {
				return false;
			}

			if ($this->auth_source_provider !== '') {
				return false;
			}

			if ($this->auth_source_server_name !== '') {
				return false;
			}

			if ($this->auth_source_port !== 389) {
				return false;
			}

			if ($this->auth_source_enabled_tls !== 0) {
				return false;
			}

			if ($this->auth_source_version !== '3') {
				return false;
			}

			if ($this->auth_source_base_dn !== '') {
				return false;
			}

			if ($this->auth_anonymous !== 0) {
				return false;
			}

			if ($this->auth_source_search_user !== '') {
				return false;
			}

			if ($this->auth_source_password !== '') {
				return false;
			}

			if ($this->auth_source_attributes !== '') {
				return false;
			}

			if ($this->auth_source_object_classes !== '') {
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

			$this->auth_source_uid = ($row[$startcol + 0] !== null) ? (string) $row[$startcol + 0] : null;
			$this->auth_source_name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->auth_source_provider = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->auth_source_server_name = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->auth_source_port = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->auth_source_enabled_tls = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->auth_source_version = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->auth_source_base_dn = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->auth_anonymous = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->auth_source_search_user = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->auth_source_password = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->auth_source_attributes = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->auth_source_object_classes = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->auth_source_data = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 14; // 14 = AuthenticationSourcePeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating AuthenticationSource object", $e);
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
			$con = Propel::getConnection(AuthenticationSourcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = AuthenticationSourcePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$con = Propel::getConnection(AuthenticationSourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$deleteQuery = AuthenticationSourceQuery::create()
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
			$con = Propel::getConnection(AuthenticationSourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				AuthenticationSourcePeer::addInstanceToPool($this);
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
					$affectedRows = AuthenticationSourcePeer::doUpdate($this, $con);
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


			if (($retval = AuthenticationSourcePeer::doValidate($this, $columns)) !== true) {
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
		$pos = AuthenticationSourcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getAuthSourceUid();
				break;
			case 1:
				return $this->getAuthSourceName();
				break;
			case 2:
				return $this->getAuthSourceProvider();
				break;
			case 3:
				return $this->getAuthSourceServerName();
				break;
			case 4:
				return $this->getAuthSourcePort();
				break;
			case 5:
				return $this->getAuthSourceEnabledTls();
				break;
			case 6:
				return $this->getAuthSourceVersion();
				break;
			case 7:
				return $this->getAuthSourceBaseDn();
				break;
			case 8:
				return $this->getAuthAnonymous();
				break;
			case 9:
				return $this->getAuthSourceSearchUser();
				break;
			case 10:
				return $this->getAuthSourcePassword();
				break;
			case 11:
				return $this->getAuthSourceAttributes();
				break;
			case 12:
				return $this->getAuthSourceObjectClasses();
				break;
			case 13:
				return $this->getAuthSourceData();
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
		if (isset($alreadyDumpedObjects['AuthenticationSource'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['AuthenticationSource'][$this->getPrimaryKey()] = true;
		$keys = AuthenticationSourcePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getAuthSourceUid(),
			$keys[1] => $this->getAuthSourceName(),
			$keys[2] => $this->getAuthSourceProvider(),
			$keys[3] => $this->getAuthSourceServerName(),
			$keys[4] => $this->getAuthSourcePort(),
			$keys[5] => $this->getAuthSourceEnabledTls(),
			$keys[6] => $this->getAuthSourceVersion(),
			$keys[7] => $this->getAuthSourceBaseDn(),
			$keys[8] => $this->getAuthAnonymous(),
			$keys[9] => $this->getAuthSourceSearchUser(),
			$keys[10] => $this->getAuthSourcePassword(),
			$keys[11] => $this->getAuthSourceAttributes(),
			$keys[12] => $this->getAuthSourceObjectClasses(),
			$keys[13] => $this->getAuthSourceData(),
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
		$pos = AuthenticationSourcePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setAuthSourceUid($value);
				break;
			case 1:
				$this->setAuthSourceName($value);
				break;
			case 2:
				$this->setAuthSourceProvider($value);
				break;
			case 3:
				$this->setAuthSourceServerName($value);
				break;
			case 4:
				$this->setAuthSourcePort($value);
				break;
			case 5:
				$this->setAuthSourceEnabledTls($value);
				break;
			case 6:
				$this->setAuthSourceVersion($value);
				break;
			case 7:
				$this->setAuthSourceBaseDn($value);
				break;
			case 8:
				$this->setAuthAnonymous($value);
				break;
			case 9:
				$this->setAuthSourceSearchUser($value);
				break;
			case 10:
				$this->setAuthSourcePassword($value);
				break;
			case 11:
				$this->setAuthSourceAttributes($value);
				break;
			case 12:
				$this->setAuthSourceObjectClasses($value);
				break;
			case 13:
				$this->setAuthSourceData($value);
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
		$keys = AuthenticationSourcePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setAuthSourceUid($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setAuthSourceName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAuthSourceProvider($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setAuthSourceServerName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setAuthSourcePort($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAuthSourceEnabledTls($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setAuthSourceVersion($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setAuthSourceBaseDn($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAuthAnonymous($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setAuthSourceSearchUser($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAuthSourcePassword($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAuthSourceAttributes($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setAuthSourceObjectClasses($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setAuthSourceData($arr[$keys[13]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(AuthenticationSourcePeer::DATABASE_NAME);

		if ($this->isColumnModified(AuthenticationSourcePeer::AUTH_SOURCE_UID)) $criteria->add(AuthenticationSourcePeer::AUTH_SOURCE_UID, $this->auth_source_uid);
		if ($this->isColumnModified(AuthenticationSourcePeer::AUTH_SOURCE_NAME)) $criteria->add(AuthenticationSourcePeer::AUTH_SOURCE_NAME, $this->auth_source_name);
		if ($this->isColumnModified(AuthenticationSourcePeer::AUTH_SOURCE_PROVIDER)) $criteria->add(AuthenticationSourcePeer::AUTH_SOURCE_PROVIDER, $this->auth_source_provider);
		if ($this->isColumnModified(AuthenticationSourcePeer::AUTH_SOURCE_SERVER_NAME)) $criteria->add(AuthenticationSourcePeer::AUTH_SOURCE_SERVER_NAME, $this->auth_source_server_name);
		if ($this->isColumnModified(AuthenticationSourcePeer::AUTH_SOURCE_PORT)) $criteria->add(AuthenticationSourcePeer::AUTH_SOURCE_PORT, $this->auth_source_port);
		if ($this->isColumnModified(AuthenticationSourcePeer::AUTH_SOURCE_ENABLED_TLS)) $criteria->add(AuthenticationSourcePeer::AUTH_SOURCE_ENABLED_TLS, $this->auth_source_enabled_tls);
		if ($this->isColumnModified(AuthenticationSourcePeer::AUTH_SOURCE_VERSION)) $criteria->add(AuthenticationSourcePeer::AUTH_SOURCE_VERSION, $this->auth_source_version);
		if ($this->isColumnModified(AuthenticationSourcePeer::AUTH_SOURCE_BASE_DN)) $criteria->add(AuthenticationSourcePeer::AUTH_SOURCE_BASE_DN, $this->auth_source_base_dn);
		if ($this->isColumnModified(AuthenticationSourcePeer::AUTH_ANONYMOUS)) $criteria->add(AuthenticationSourcePeer::AUTH_ANONYMOUS, $this->auth_anonymous);
		if ($this->isColumnModified(AuthenticationSourcePeer::AUTH_SOURCE_SEARCH_USER)) $criteria->add(AuthenticationSourcePeer::AUTH_SOURCE_SEARCH_USER, $this->auth_source_search_user);
		if ($this->isColumnModified(AuthenticationSourcePeer::AUTH_SOURCE_PASSWORD)) $criteria->add(AuthenticationSourcePeer::AUTH_SOURCE_PASSWORD, $this->auth_source_password);
		if ($this->isColumnModified(AuthenticationSourcePeer::AUTH_SOURCE_ATTRIBUTES)) $criteria->add(AuthenticationSourcePeer::AUTH_SOURCE_ATTRIBUTES, $this->auth_source_attributes);
		if ($this->isColumnModified(AuthenticationSourcePeer::AUTH_SOURCE_OBJECT_CLASSES)) $criteria->add(AuthenticationSourcePeer::AUTH_SOURCE_OBJECT_CLASSES, $this->auth_source_object_classes);
		if ($this->isColumnModified(AuthenticationSourcePeer::AUTH_SOURCE_DATA)) $criteria->add(AuthenticationSourcePeer::AUTH_SOURCE_DATA, $this->auth_source_data);

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
		$criteria = new Criteria(AuthenticationSourcePeer::DATABASE_NAME);
		$criteria->add(AuthenticationSourcePeer::AUTH_SOURCE_UID, $this->auth_source_uid);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     string
	 */
	public function getPrimaryKey()
	{
		return $this->getAuthSourceUid();
	}

	/**
	 * Generic method to set the primary key (auth_source_uid column).
	 *
	 * @param      string $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setAuthSourceUid($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getAuthSourceUid();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of AuthenticationSource (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setAuthSourceUid($this->getAuthSourceUid());
		$copyObj->setAuthSourceName($this->getAuthSourceName());
		$copyObj->setAuthSourceProvider($this->getAuthSourceProvider());
		$copyObj->setAuthSourceServerName($this->getAuthSourceServerName());
		$copyObj->setAuthSourcePort($this->getAuthSourcePort());
		$copyObj->setAuthSourceEnabledTls($this->getAuthSourceEnabledTls());
		$copyObj->setAuthSourceVersion($this->getAuthSourceVersion());
		$copyObj->setAuthSourceBaseDn($this->getAuthSourceBaseDn());
		$copyObj->setAuthAnonymous($this->getAuthAnonymous());
		$copyObj->setAuthSourceSearchUser($this->getAuthSourceSearchUser());
		$copyObj->setAuthSourcePassword($this->getAuthSourcePassword());
		$copyObj->setAuthSourceAttributes($this->getAuthSourceAttributes());
		$copyObj->setAuthSourceObjectClasses($this->getAuthSourceObjectClasses());
		$copyObj->setAuthSourceData($this->getAuthSourceData());
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
	 * @return     AuthenticationSource Clone of current object.
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
	 * @return     AuthenticationSourcePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new AuthenticationSourcePeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->auth_source_uid = null;
		$this->auth_source_name = null;
		$this->auth_source_provider = null;
		$this->auth_source_server_name = null;
		$this->auth_source_port = null;
		$this->auth_source_enabled_tls = null;
		$this->auth_source_version = null;
		$this->auth_source_base_dn = null;
		$this->auth_anonymous = null;
		$this->auth_source_search_user = null;
		$this->auth_source_password = null;
		$this->auth_source_attributes = null;
		$this->auth_source_object_classes = null;
		$this->auth_source_data = null;
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
		return (string) $this->exportTo(AuthenticationSourcePeer::DEFAULT_STRING_FORMAT);
	}

} // BaseAuthenticationSource
