<?php


require_once 'propel/util/BasePeer.php';
require_once 'classes/model/map/TaskTableMap.php';

include_once 'classes/model/Task.php';
/**
 * Base static class for performing query and update operations on the 'TASK' table.
 *
 * 
 *
 * @package    propel.generator.classes.model.om
 */
abstract class BaseTaskPeer
{

    /** the default database name for this class */
    const DATABASE_NAME = 'workflow';

    /** the table name for this class */
    const TABLE_NAME = 'TASK';

    /** the related Propel class for this table */
    const OM_CLASS = 'Task';

    /** A class that can be returned by this peer. */
    const CLASS_DEFAULT = 'classes.model.Task';

    /** the related TableMap class for this table */
    const TM_CLASS = 'TaskTableMap';

    /** The total number of columns. */
    const NUM_COLUMNS = 46;

    /** The number of lazy-loaded columns. */
    const NUM_LAZY_LOAD_COLUMNS = 0;

    /** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
    const NUM_HYDRATE_COLUMNS = 46;

    /** the column name for the PRO_UID field */
    const PRO_UID = 'TASK.PRO_UID';

    /** the column name for the TAS_UID field */
    const TAS_UID = 'TASK.TAS_UID';

    /** the column name for the TAS_TYPE field */
    const TAS_TYPE = 'TASK.TAS_TYPE';

    /** the column name for the TAS_DURATION field */
    const TAS_DURATION = 'TASK.TAS_DURATION';

    /** the column name for the TAS_DELAY_TYPE field */
    const TAS_DELAY_TYPE = 'TASK.TAS_DELAY_TYPE';

    /** the column name for the TAS_TEMPORIZER field */
    const TAS_TEMPORIZER = 'TASK.TAS_TEMPORIZER';

    /** the column name for the TAS_TYPE_DAY field */
    const TAS_TYPE_DAY = 'TASK.TAS_TYPE_DAY';

    /** the column name for the TAS_TIMEUNIT field */
    const TAS_TIMEUNIT = 'TASK.TAS_TIMEUNIT';

    /** the column name for the TAS_ALERT field */
    const TAS_ALERT = 'TASK.TAS_ALERT';

    /** the column name for the TAS_PRIORITY_VARIABLE field */
    const TAS_PRIORITY_VARIABLE = 'TASK.TAS_PRIORITY_VARIABLE';

    /** the column name for the TAS_ASSIGN_TYPE field */
    const TAS_ASSIGN_TYPE = 'TASK.TAS_ASSIGN_TYPE';

    /** the column name for the TAS_ASSIGN_VARIABLE field */
    const TAS_ASSIGN_VARIABLE = 'TASK.TAS_ASSIGN_VARIABLE';

    /** the column name for the TAS_GROUP_VARIABLE field */
    const TAS_GROUP_VARIABLE = 'TASK.TAS_GROUP_VARIABLE';

    /** the column name for the TAS_MI_INSTANCE_VARIABLE field */
    const TAS_MI_INSTANCE_VARIABLE = 'TASK.TAS_MI_INSTANCE_VARIABLE';

    /** the column name for the TAS_MI_COMPLETE_VARIABLE field */
    const TAS_MI_COMPLETE_VARIABLE = 'TASK.TAS_MI_COMPLETE_VARIABLE';

    /** the column name for the TAS_ASSIGN_LOCATION field */
    const TAS_ASSIGN_LOCATION = 'TASK.TAS_ASSIGN_LOCATION';

    /** the column name for the TAS_ASSIGN_LOCATION_ADHOC field */
    const TAS_ASSIGN_LOCATION_ADHOC = 'TASK.TAS_ASSIGN_LOCATION_ADHOC';

    /** the column name for the TAS_TRANSFER_FLY field */
    const TAS_TRANSFER_FLY = 'TASK.TAS_TRANSFER_FLY';

    /** the column name for the TAS_LAST_ASSIGNED field */
    const TAS_LAST_ASSIGNED = 'TASK.TAS_LAST_ASSIGNED';

    /** the column name for the TAS_USER field */
    const TAS_USER = 'TASK.TAS_USER';

    /** the column name for the TAS_CAN_UPLOAD field */
    const TAS_CAN_UPLOAD = 'TASK.TAS_CAN_UPLOAD';

    /** the column name for the TAS_VIEW_UPLOAD field */
    const TAS_VIEW_UPLOAD = 'TASK.TAS_VIEW_UPLOAD';

    /** the column name for the TAS_VIEW_ADDITIONAL_DOCUMENTATION field */
    const TAS_VIEW_ADDITIONAL_DOCUMENTATION = 'TASK.TAS_VIEW_ADDITIONAL_DOCUMENTATION';

    /** the column name for the TAS_CAN_CANCEL field */
    const TAS_CAN_CANCEL = 'TASK.TAS_CAN_CANCEL';

    /** the column name for the TAS_OWNER_APP field */
    const TAS_OWNER_APP = 'TASK.TAS_OWNER_APP';

    /** the column name for the STG_UID field */
    const STG_UID = 'TASK.STG_UID';

    /** the column name for the TAS_CAN_PAUSE field */
    const TAS_CAN_PAUSE = 'TASK.TAS_CAN_PAUSE';

    /** the column name for the TAS_CAN_SEND_MESSAGE field */
    const TAS_CAN_SEND_MESSAGE = 'TASK.TAS_CAN_SEND_MESSAGE';

    /** the column name for the TAS_CAN_DELETE_DOCS field */
    const TAS_CAN_DELETE_DOCS = 'TASK.TAS_CAN_DELETE_DOCS';

    /** the column name for the TAS_SELF_SERVICE field */
    const TAS_SELF_SERVICE = 'TASK.TAS_SELF_SERVICE';

    /** the column name for the TAS_START field */
    const TAS_START = 'TASK.TAS_START';

    /** the column name for the TAS_TO_LAST_USER field */
    const TAS_TO_LAST_USER = 'TASK.TAS_TO_LAST_USER';

    /** the column name for the TAS_SEND_LAST_EMAIL field */
    const TAS_SEND_LAST_EMAIL = 'TASK.TAS_SEND_LAST_EMAIL';

    /** the column name for the TAS_DERIVATION field */
    const TAS_DERIVATION = 'TASK.TAS_DERIVATION';

    /** the column name for the TAS_POSX field */
    const TAS_POSX = 'TASK.TAS_POSX';

    /** the column name for the TAS_POSY field */
    const TAS_POSY = 'TASK.TAS_POSY';

    /** the column name for the TAS_WIDTH field */
    const TAS_WIDTH = 'TASK.TAS_WIDTH';

    /** the column name for the TAS_HEIGHT field */
    const TAS_HEIGHT = 'TASK.TAS_HEIGHT';

    /** the column name for the TAS_COLOR field */
    const TAS_COLOR = 'TASK.TAS_COLOR';

    /** the column name for the TAS_EVN_UID field */
    const TAS_EVN_UID = 'TASK.TAS_EVN_UID';

    /** the column name for the TAS_BOUNDARY field */
    const TAS_BOUNDARY = 'TASK.TAS_BOUNDARY';

    /** the column name for the TAS_DERIVATION_SCREEN_TPL field */
    const TAS_DERIVATION_SCREEN_TPL = 'TASK.TAS_DERIVATION_SCREEN_TPL';

    /** the column name for the TAS_SELFSERVICE_TIMEOUT field */
    const TAS_SELFSERVICE_TIMEOUT = 'TASK.TAS_SELFSERVICE_TIMEOUT';

    /** the column name for the TAS_SELFSERVICE_TIME field */
    const TAS_SELFSERVICE_TIME = 'TASK.TAS_SELFSERVICE_TIME';

    /** the column name for the TAS_SELFSERVICE_TIME_UNIT field */
    const TAS_SELFSERVICE_TIME_UNIT = 'TASK.TAS_SELFSERVICE_TIME_UNIT';

    /** the column name for the TAS_SELFSERVICE_TRIGGER_UID field */
    const TAS_SELFSERVICE_TRIGGER_UID = 'TASK.TAS_SELFSERVICE_TRIGGER_UID';

    /** The default string format for model objects of the related table **/
    const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * An identiy map to hold any loaded instances of Task objects.
     * This must be public so that other peer classes can access this when hydrating from JOIN
     * queries.
     * @var        array Task[]
     */
    public static $instances = array();


    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     */
    protected static $fieldNames = array (
        BasePeer::TYPE_PHPNAME => array ('ProUid', 'TasUid', 'TasType', 'TasDuration', 'TasDelayType', 'TasTemporizer', 'TasTypeDay', 'TasTimeunit', 'TasAlert', 'TasPriorityVariable', 'TasAssignType', 'TasAssignVariable', 'TasGroupVariable', 'TasMiInstanceVariable', 'TasMiCompleteVariable', 'TasAssignLocation', 'TasAssignLocationAdhoc', 'TasTransferFly', 'TasLastAssigned', 'TasUser', 'TasCanUpload', 'TasViewUpload', 'TasViewAdditionalDocumentation', 'TasCanCancel', 'TasOwnerApp', 'StgUid', 'TasCanPause', 'TasCanSendMessage', 'TasCanDeleteDocs', 'TasSelfService', 'TasStart', 'TasToLastUser', 'TasSendLastEmail', 'TasDerivation', 'TasPosx', 'TasPosy', 'TasWidth', 'TasHeight', 'TasColor', 'TasEvnUid', 'TasBoundary', 'TasDerivationScreenTpl', 'TasSelfserviceTimeout', 'TasSelfserviceTime', 'TasSelfserviceTimeUnit', 'TasSelfserviceTriggerUid', ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('proUid', 'tasUid', 'tasType', 'tasDuration', 'tasDelayType', 'tasTemporizer', 'tasTypeDay', 'tasTimeunit', 'tasAlert', 'tasPriorityVariable', 'tasAssignType', 'tasAssignVariable', 'tasGroupVariable', 'tasMiInstanceVariable', 'tasMiCompleteVariable', 'tasAssignLocation', 'tasAssignLocationAdhoc', 'tasTransferFly', 'tasLastAssigned', 'tasUser', 'tasCanUpload', 'tasViewUpload', 'tasViewAdditionalDocumentation', 'tasCanCancel', 'tasOwnerApp', 'stgUid', 'tasCanPause', 'tasCanSendMessage', 'tasCanDeleteDocs', 'tasSelfService', 'tasStart', 'tasToLastUser', 'tasSendLastEmail', 'tasDerivation', 'tasPosx', 'tasPosy', 'tasWidth', 'tasHeight', 'tasColor', 'tasEvnUid', 'tasBoundary', 'tasDerivationScreenTpl', 'tasSelfserviceTimeout', 'tasSelfserviceTime', 'tasSelfserviceTimeUnit', 'tasSelfserviceTriggerUid', ),
        BasePeer::TYPE_COLNAME => array (self::PRO_UID, self::TAS_UID, self::TAS_TYPE, self::TAS_DURATION, self::TAS_DELAY_TYPE, self::TAS_TEMPORIZER, self::TAS_TYPE_DAY, self::TAS_TIMEUNIT, self::TAS_ALERT, self::TAS_PRIORITY_VARIABLE, self::TAS_ASSIGN_TYPE, self::TAS_ASSIGN_VARIABLE, self::TAS_GROUP_VARIABLE, self::TAS_MI_INSTANCE_VARIABLE, self::TAS_MI_COMPLETE_VARIABLE, self::TAS_ASSIGN_LOCATION, self::TAS_ASSIGN_LOCATION_ADHOC, self::TAS_TRANSFER_FLY, self::TAS_LAST_ASSIGNED, self::TAS_USER, self::TAS_CAN_UPLOAD, self::TAS_VIEW_UPLOAD, self::TAS_VIEW_ADDITIONAL_DOCUMENTATION, self::TAS_CAN_CANCEL, self::TAS_OWNER_APP, self::STG_UID, self::TAS_CAN_PAUSE, self::TAS_CAN_SEND_MESSAGE, self::TAS_CAN_DELETE_DOCS, self::TAS_SELF_SERVICE, self::TAS_START, self::TAS_TO_LAST_USER, self::TAS_SEND_LAST_EMAIL, self::TAS_DERIVATION, self::TAS_POSX, self::TAS_POSY, self::TAS_WIDTH, self::TAS_HEIGHT, self::TAS_COLOR, self::TAS_EVN_UID, self::TAS_BOUNDARY, self::TAS_DERIVATION_SCREEN_TPL, self::TAS_SELFSERVICE_TIMEOUT, self::TAS_SELFSERVICE_TIME, self::TAS_SELFSERVICE_TIME_UNIT, self::TAS_SELFSERVICE_TRIGGER_UID, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PRO_UID', 'TAS_UID', 'TAS_TYPE', 'TAS_DURATION', 'TAS_DELAY_TYPE', 'TAS_TEMPORIZER', 'TAS_TYPE_DAY', 'TAS_TIMEUNIT', 'TAS_ALERT', 'TAS_PRIORITY_VARIABLE', 'TAS_ASSIGN_TYPE', 'TAS_ASSIGN_VARIABLE', 'TAS_GROUP_VARIABLE', 'TAS_MI_INSTANCE_VARIABLE', 'TAS_MI_COMPLETE_VARIABLE', 'TAS_ASSIGN_LOCATION', 'TAS_ASSIGN_LOCATION_ADHOC', 'TAS_TRANSFER_FLY', 'TAS_LAST_ASSIGNED', 'TAS_USER', 'TAS_CAN_UPLOAD', 'TAS_VIEW_UPLOAD', 'TAS_VIEW_ADDITIONAL_DOCUMENTATION', 'TAS_CAN_CANCEL', 'TAS_OWNER_APP', 'STG_UID', 'TAS_CAN_PAUSE', 'TAS_CAN_SEND_MESSAGE', 'TAS_CAN_DELETE_DOCS', 'TAS_SELF_SERVICE', 'TAS_START', 'TAS_TO_LAST_USER', 'TAS_SEND_LAST_EMAIL', 'TAS_DERIVATION', 'TAS_POSX', 'TAS_POSY', 'TAS_WIDTH', 'TAS_HEIGHT', 'TAS_COLOR', 'TAS_EVN_UID', 'TAS_BOUNDARY', 'TAS_DERIVATION_SCREEN_TPL', 'TAS_SELFSERVICE_TIMEOUT', 'TAS_SELFSERVICE_TIME', 'TAS_SELFSERVICE_TIME_UNIT', 'TAS_SELFSERVICE_TRIGGER_UID', ),
        BasePeer::TYPE_FIELDNAME => array ('PRO_UID', 'TAS_UID', 'TAS_TYPE', 'TAS_DURATION', 'TAS_DELAY_TYPE', 'TAS_TEMPORIZER', 'TAS_TYPE_DAY', 'TAS_TIMEUNIT', 'TAS_ALERT', 'TAS_PRIORITY_VARIABLE', 'TAS_ASSIGN_TYPE', 'TAS_ASSIGN_VARIABLE', 'TAS_GROUP_VARIABLE', 'TAS_MI_INSTANCE_VARIABLE', 'TAS_MI_COMPLETE_VARIABLE', 'TAS_ASSIGN_LOCATION', 'TAS_ASSIGN_LOCATION_ADHOC', 'TAS_TRANSFER_FLY', 'TAS_LAST_ASSIGNED', 'TAS_USER', 'TAS_CAN_UPLOAD', 'TAS_VIEW_UPLOAD', 'TAS_VIEW_ADDITIONAL_DOCUMENTATION', 'TAS_CAN_CANCEL', 'TAS_OWNER_APP', 'STG_UID', 'TAS_CAN_PAUSE', 'TAS_CAN_SEND_MESSAGE', 'TAS_CAN_DELETE_DOCS', 'TAS_SELF_SERVICE', 'TAS_START', 'TAS_TO_LAST_USER', 'TAS_SEND_LAST_EMAIL', 'TAS_DERIVATION', 'TAS_POSX', 'TAS_POSY', 'TAS_WIDTH', 'TAS_HEIGHT', 'TAS_COLOR', 'TAS_EVN_UID', 'TAS_BOUNDARY', 'TAS_DERIVATION_SCREEN_TPL', 'TAS_SELFSERVICE_TIMEOUT', 'TAS_SELFSERVICE_TIME', 'TAS_SELFSERVICE_TIME_UNIT', 'TAS_SELFSERVICE_TRIGGER_UID', ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, )
    );

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
     */
    protected static $fieldKeys = array (
        BasePeer::TYPE_PHPNAME => array ('ProUid' => 0, 'TasUid' => 1, 'TasType' => 2, 'TasDuration' => 3, 'TasDelayType' => 4, 'TasTemporizer' => 5, 'TasTypeDay' => 6, 'TasTimeunit' => 7, 'TasAlert' => 8, 'TasPriorityVariable' => 9, 'TasAssignType' => 10, 'TasAssignVariable' => 11, 'TasGroupVariable' => 12, 'TasMiInstanceVariable' => 13, 'TasMiCompleteVariable' => 14, 'TasAssignLocation' => 15, 'TasAssignLocationAdhoc' => 16, 'TasTransferFly' => 17, 'TasLastAssigned' => 18, 'TasUser' => 19, 'TasCanUpload' => 20, 'TasViewUpload' => 21, 'TasViewAdditionalDocumentation' => 22, 'TasCanCancel' => 23, 'TasOwnerApp' => 24, 'StgUid' => 25, 'TasCanPause' => 26, 'TasCanSendMessage' => 27, 'TasCanDeleteDocs' => 28, 'TasSelfService' => 29, 'TasStart' => 30, 'TasToLastUser' => 31, 'TasSendLastEmail' => 32, 'TasDerivation' => 33, 'TasPosx' => 34, 'TasPosy' => 35, 'TasWidth' => 36, 'TasHeight' => 37, 'TasColor' => 38, 'TasEvnUid' => 39, 'TasBoundary' => 40, 'TasDerivationScreenTpl' => 41, 'TasSelfserviceTimeout' => 42, 'TasSelfserviceTime' => 43, 'TasSelfserviceTimeUnit' => 44, 'TasSelfserviceTriggerUid' => 45, ),
        BasePeer::TYPE_STUDLYPHPNAME => array ('proUid' => 0, 'tasUid' => 1, 'tasType' => 2, 'tasDuration' => 3, 'tasDelayType' => 4, 'tasTemporizer' => 5, 'tasTypeDay' => 6, 'tasTimeunit' => 7, 'tasAlert' => 8, 'tasPriorityVariable' => 9, 'tasAssignType' => 10, 'tasAssignVariable' => 11, 'tasGroupVariable' => 12, 'tasMiInstanceVariable' => 13, 'tasMiCompleteVariable' => 14, 'tasAssignLocation' => 15, 'tasAssignLocationAdhoc' => 16, 'tasTransferFly' => 17, 'tasLastAssigned' => 18, 'tasUser' => 19, 'tasCanUpload' => 20, 'tasViewUpload' => 21, 'tasViewAdditionalDocumentation' => 22, 'tasCanCancel' => 23, 'tasOwnerApp' => 24, 'stgUid' => 25, 'tasCanPause' => 26, 'tasCanSendMessage' => 27, 'tasCanDeleteDocs' => 28, 'tasSelfService' => 29, 'tasStart' => 30, 'tasToLastUser' => 31, 'tasSendLastEmail' => 32, 'tasDerivation' => 33, 'tasPosx' => 34, 'tasPosy' => 35, 'tasWidth' => 36, 'tasHeight' => 37, 'tasColor' => 38, 'tasEvnUid' => 39, 'tasBoundary' => 40, 'tasDerivationScreenTpl' => 41, 'tasSelfserviceTimeout' => 42, 'tasSelfserviceTime' => 43, 'tasSelfserviceTimeUnit' => 44, 'tasSelfserviceTriggerUid' => 45, ),
        BasePeer::TYPE_COLNAME => array (self::PRO_UID => 0, self::TAS_UID => 1, self::TAS_TYPE => 2, self::TAS_DURATION => 3, self::TAS_DELAY_TYPE => 4, self::TAS_TEMPORIZER => 5, self::TAS_TYPE_DAY => 6, self::TAS_TIMEUNIT => 7, self::TAS_ALERT => 8, self::TAS_PRIORITY_VARIABLE => 9, self::TAS_ASSIGN_TYPE => 10, self::TAS_ASSIGN_VARIABLE => 11, self::TAS_GROUP_VARIABLE => 12, self::TAS_MI_INSTANCE_VARIABLE => 13, self::TAS_MI_COMPLETE_VARIABLE => 14, self::TAS_ASSIGN_LOCATION => 15, self::TAS_ASSIGN_LOCATION_ADHOC => 16, self::TAS_TRANSFER_FLY => 17, self::TAS_LAST_ASSIGNED => 18, self::TAS_USER => 19, self::TAS_CAN_UPLOAD => 20, self::TAS_VIEW_UPLOAD => 21, self::TAS_VIEW_ADDITIONAL_DOCUMENTATION => 22, self::TAS_CAN_CANCEL => 23, self::TAS_OWNER_APP => 24, self::STG_UID => 25, self::TAS_CAN_PAUSE => 26, self::TAS_CAN_SEND_MESSAGE => 27, self::TAS_CAN_DELETE_DOCS => 28, self::TAS_SELF_SERVICE => 29, self::TAS_START => 30, self::TAS_TO_LAST_USER => 31, self::TAS_SEND_LAST_EMAIL => 32, self::TAS_DERIVATION => 33, self::TAS_POSX => 34, self::TAS_POSY => 35, self::TAS_WIDTH => 36, self::TAS_HEIGHT => 37, self::TAS_COLOR => 38, self::TAS_EVN_UID => 39, self::TAS_BOUNDARY => 40, self::TAS_DERIVATION_SCREEN_TPL => 41, self::TAS_SELFSERVICE_TIMEOUT => 42, self::TAS_SELFSERVICE_TIME => 43, self::TAS_SELFSERVICE_TIME_UNIT => 44, self::TAS_SELFSERVICE_TRIGGER_UID => 45, ),
        BasePeer::TYPE_RAW_COLNAME => array ('PRO_UID' => 0, 'TAS_UID' => 1, 'TAS_TYPE' => 2, 'TAS_DURATION' => 3, 'TAS_DELAY_TYPE' => 4, 'TAS_TEMPORIZER' => 5, 'TAS_TYPE_DAY' => 6, 'TAS_TIMEUNIT' => 7, 'TAS_ALERT' => 8, 'TAS_PRIORITY_VARIABLE' => 9, 'TAS_ASSIGN_TYPE' => 10, 'TAS_ASSIGN_VARIABLE' => 11, 'TAS_GROUP_VARIABLE' => 12, 'TAS_MI_INSTANCE_VARIABLE' => 13, 'TAS_MI_COMPLETE_VARIABLE' => 14, 'TAS_ASSIGN_LOCATION' => 15, 'TAS_ASSIGN_LOCATION_ADHOC' => 16, 'TAS_TRANSFER_FLY' => 17, 'TAS_LAST_ASSIGNED' => 18, 'TAS_USER' => 19, 'TAS_CAN_UPLOAD' => 20, 'TAS_VIEW_UPLOAD' => 21, 'TAS_VIEW_ADDITIONAL_DOCUMENTATION' => 22, 'TAS_CAN_CANCEL' => 23, 'TAS_OWNER_APP' => 24, 'STG_UID' => 25, 'TAS_CAN_PAUSE' => 26, 'TAS_CAN_SEND_MESSAGE' => 27, 'TAS_CAN_DELETE_DOCS' => 28, 'TAS_SELF_SERVICE' => 29, 'TAS_START' => 30, 'TAS_TO_LAST_USER' => 31, 'TAS_SEND_LAST_EMAIL' => 32, 'TAS_DERIVATION' => 33, 'TAS_POSX' => 34, 'TAS_POSY' => 35, 'TAS_WIDTH' => 36, 'TAS_HEIGHT' => 37, 'TAS_COLOR' => 38, 'TAS_EVN_UID' => 39, 'TAS_BOUNDARY' => 40, 'TAS_DERIVATION_SCREEN_TPL' => 41, 'TAS_SELFSERVICE_TIMEOUT' => 42, 'TAS_SELFSERVICE_TIME' => 43, 'TAS_SELFSERVICE_TIME_UNIT' => 44, 'TAS_SELFSERVICE_TRIGGER_UID' => 45, ),
        BasePeer::TYPE_FIELDNAME => array ('PRO_UID' => 0, 'TAS_UID' => 1, 'TAS_TYPE' => 2, 'TAS_DURATION' => 3, 'TAS_DELAY_TYPE' => 4, 'TAS_TEMPORIZER' => 5, 'TAS_TYPE_DAY' => 6, 'TAS_TIMEUNIT' => 7, 'TAS_ALERT' => 8, 'TAS_PRIORITY_VARIABLE' => 9, 'TAS_ASSIGN_TYPE' => 10, 'TAS_ASSIGN_VARIABLE' => 11, 'TAS_GROUP_VARIABLE' => 12, 'TAS_MI_INSTANCE_VARIABLE' => 13, 'TAS_MI_COMPLETE_VARIABLE' => 14, 'TAS_ASSIGN_LOCATION' => 15, 'TAS_ASSIGN_LOCATION_ADHOC' => 16, 'TAS_TRANSFER_FLY' => 17, 'TAS_LAST_ASSIGNED' => 18, 'TAS_USER' => 19, 'TAS_CAN_UPLOAD' => 20, 'TAS_VIEW_UPLOAD' => 21, 'TAS_VIEW_ADDITIONAL_DOCUMENTATION' => 22, 'TAS_CAN_CANCEL' => 23, 'TAS_OWNER_APP' => 24, 'STG_UID' => 25, 'TAS_CAN_PAUSE' => 26, 'TAS_CAN_SEND_MESSAGE' => 27, 'TAS_CAN_DELETE_DOCS' => 28, 'TAS_SELF_SERVICE' => 29, 'TAS_START' => 30, 'TAS_TO_LAST_USER' => 31, 'TAS_SEND_LAST_EMAIL' => 32, 'TAS_DERIVATION' => 33, 'TAS_POSX' => 34, 'TAS_POSY' => 35, 'TAS_WIDTH' => 36, 'TAS_HEIGHT' => 37, 'TAS_COLOR' => 38, 'TAS_EVN_UID' => 39, 'TAS_BOUNDARY' => 40, 'TAS_DERIVATION_SCREEN_TPL' => 41, 'TAS_SELFSERVICE_TIMEOUT' => 42, 'TAS_SELFSERVICE_TIME' => 43, 'TAS_SELFSERVICE_TIME_UNIT' => 44, 'TAS_SELFSERVICE_TRIGGER_UID' => 45, ),
        BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, )
    );

    /**
     * Translates a fieldname to another type
     *
     * @param      string $name field name
     * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @param      string $toType   One of the class type constants
     * @return     string translated name of the field.
     * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
     */
    static public function translateFieldName($name, $fromType, $toType)
    {
        $toNames = self::getFieldNames($toType);
        $key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
        if ($key === null) {
            throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
        }
        return $toNames[$key];
    }

    /**
     * Returns an array of field names.
     *
     * @param      string $type The type of fieldnames to return:
     *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
     *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
     * @return     array A list of field names
     */

    static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
    {
        if (!array_key_exists($type, self::$fieldNames)) {
            throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
        }
        return self::$fieldNames[$type];
    }

    /**
     * Convenience method which changes table.column to alias.column.
     *
     * Using this method you can maintain SQL abstraction while using column aliases.
     * <code>
     *      $c->addAlias("alias1", TablePeer::TABLE_NAME);
     *      $c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
     * </code>
     * @param      string $alias The alias for the current table.
     * @param      string $column The column name for current table. (i.e. TaskPeer::COLUMN_NAME).
     * @return     string
     */
    public static function alias($alias, $column)
    {
        return str_replace(TaskPeer::TABLE_NAME.'.', $alias.'.', $column);
    }

    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param      Criteria $criteria object containing the columns to add.
     * @param      string   $alias    optional table alias
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function addSelectColumns(Criteria $criteria, $alias = null)
    {
        if (null === $alias) {
            $criteria->addSelectColumn(TaskPeer::PRO_UID);
            $criteria->addSelectColumn(TaskPeer::TAS_UID);
            $criteria->addSelectColumn(TaskPeer::TAS_TYPE);
            $criteria->addSelectColumn(TaskPeer::TAS_DURATION);
            $criteria->addSelectColumn(TaskPeer::TAS_DELAY_TYPE);
            $criteria->addSelectColumn(TaskPeer::TAS_TEMPORIZER);
            $criteria->addSelectColumn(TaskPeer::TAS_TYPE_DAY);
            $criteria->addSelectColumn(TaskPeer::TAS_TIMEUNIT);
            $criteria->addSelectColumn(TaskPeer::TAS_ALERT);
            $criteria->addSelectColumn(TaskPeer::TAS_PRIORITY_VARIABLE);
            $criteria->addSelectColumn(TaskPeer::TAS_ASSIGN_TYPE);
            $criteria->addSelectColumn(TaskPeer::TAS_ASSIGN_VARIABLE);
            $criteria->addSelectColumn(TaskPeer::TAS_GROUP_VARIABLE);
            $criteria->addSelectColumn(TaskPeer::TAS_MI_INSTANCE_VARIABLE);
            $criteria->addSelectColumn(TaskPeer::TAS_MI_COMPLETE_VARIABLE);
            $criteria->addSelectColumn(TaskPeer::TAS_ASSIGN_LOCATION);
            $criteria->addSelectColumn(TaskPeer::TAS_ASSIGN_LOCATION_ADHOC);
            $criteria->addSelectColumn(TaskPeer::TAS_TRANSFER_FLY);
            $criteria->addSelectColumn(TaskPeer::TAS_LAST_ASSIGNED);
            $criteria->addSelectColumn(TaskPeer::TAS_USER);
            $criteria->addSelectColumn(TaskPeer::TAS_CAN_UPLOAD);
            $criteria->addSelectColumn(TaskPeer::TAS_VIEW_UPLOAD);
            $criteria->addSelectColumn(TaskPeer::TAS_VIEW_ADDITIONAL_DOCUMENTATION);
            $criteria->addSelectColumn(TaskPeer::TAS_CAN_CANCEL);
            $criteria->addSelectColumn(TaskPeer::TAS_OWNER_APP);
            $criteria->addSelectColumn(TaskPeer::STG_UID);
            $criteria->addSelectColumn(TaskPeer::TAS_CAN_PAUSE);
            $criteria->addSelectColumn(TaskPeer::TAS_CAN_SEND_MESSAGE);
            $criteria->addSelectColumn(TaskPeer::TAS_CAN_DELETE_DOCS);
            $criteria->addSelectColumn(TaskPeer::TAS_SELF_SERVICE);
            $criteria->addSelectColumn(TaskPeer::TAS_START);
            $criteria->addSelectColumn(TaskPeer::TAS_TO_LAST_USER);
            $criteria->addSelectColumn(TaskPeer::TAS_SEND_LAST_EMAIL);
            $criteria->addSelectColumn(TaskPeer::TAS_DERIVATION);
            $criteria->addSelectColumn(TaskPeer::TAS_POSX);
            $criteria->addSelectColumn(TaskPeer::TAS_POSY);
            $criteria->addSelectColumn(TaskPeer::TAS_WIDTH);
            $criteria->addSelectColumn(TaskPeer::TAS_HEIGHT);
            $criteria->addSelectColumn(TaskPeer::TAS_COLOR);
            $criteria->addSelectColumn(TaskPeer::TAS_EVN_UID);
            $criteria->addSelectColumn(TaskPeer::TAS_BOUNDARY);
            $criteria->addSelectColumn(TaskPeer::TAS_DERIVATION_SCREEN_TPL);
            $criteria->addSelectColumn(TaskPeer::TAS_SELFSERVICE_TIMEOUT);
            $criteria->addSelectColumn(TaskPeer::TAS_SELFSERVICE_TIME);
            $criteria->addSelectColumn(TaskPeer::TAS_SELFSERVICE_TIME_UNIT);
            $criteria->addSelectColumn(TaskPeer::TAS_SELFSERVICE_TRIGGER_UID);
        } else {
            $criteria->addSelectColumn($alias . '.PRO_UID');
            $criteria->addSelectColumn($alias . '.TAS_UID');
            $criteria->addSelectColumn($alias . '.TAS_TYPE');
            $criteria->addSelectColumn($alias . '.TAS_DURATION');
            $criteria->addSelectColumn($alias . '.TAS_DELAY_TYPE');
            $criteria->addSelectColumn($alias . '.TAS_TEMPORIZER');
            $criteria->addSelectColumn($alias . '.TAS_TYPE_DAY');
            $criteria->addSelectColumn($alias . '.TAS_TIMEUNIT');
            $criteria->addSelectColumn($alias . '.TAS_ALERT');
            $criteria->addSelectColumn($alias . '.TAS_PRIORITY_VARIABLE');
            $criteria->addSelectColumn($alias . '.TAS_ASSIGN_TYPE');
            $criteria->addSelectColumn($alias . '.TAS_ASSIGN_VARIABLE');
            $criteria->addSelectColumn($alias . '.TAS_GROUP_VARIABLE');
            $criteria->addSelectColumn($alias . '.TAS_MI_INSTANCE_VARIABLE');
            $criteria->addSelectColumn($alias . '.TAS_MI_COMPLETE_VARIABLE');
            $criteria->addSelectColumn($alias . '.TAS_ASSIGN_LOCATION');
            $criteria->addSelectColumn($alias . '.TAS_ASSIGN_LOCATION_ADHOC');
            $criteria->addSelectColumn($alias . '.TAS_TRANSFER_FLY');
            $criteria->addSelectColumn($alias . '.TAS_LAST_ASSIGNED');
            $criteria->addSelectColumn($alias . '.TAS_USER');
            $criteria->addSelectColumn($alias . '.TAS_CAN_UPLOAD');
            $criteria->addSelectColumn($alias . '.TAS_VIEW_UPLOAD');
            $criteria->addSelectColumn($alias . '.TAS_VIEW_ADDITIONAL_DOCUMENTATION');
            $criteria->addSelectColumn($alias . '.TAS_CAN_CANCEL');
            $criteria->addSelectColumn($alias . '.TAS_OWNER_APP');
            $criteria->addSelectColumn($alias . '.STG_UID');
            $criteria->addSelectColumn($alias . '.TAS_CAN_PAUSE');
            $criteria->addSelectColumn($alias . '.TAS_CAN_SEND_MESSAGE');
            $criteria->addSelectColumn($alias . '.TAS_CAN_DELETE_DOCS');
            $criteria->addSelectColumn($alias . '.TAS_SELF_SERVICE');
            $criteria->addSelectColumn($alias . '.TAS_START');
            $criteria->addSelectColumn($alias . '.TAS_TO_LAST_USER');
            $criteria->addSelectColumn($alias . '.TAS_SEND_LAST_EMAIL');
            $criteria->addSelectColumn($alias . '.TAS_DERIVATION');
            $criteria->addSelectColumn($alias . '.TAS_POSX');
            $criteria->addSelectColumn($alias . '.TAS_POSY');
            $criteria->addSelectColumn($alias . '.TAS_WIDTH');
            $criteria->addSelectColumn($alias . '.TAS_HEIGHT');
            $criteria->addSelectColumn($alias . '.TAS_COLOR');
            $criteria->addSelectColumn($alias . '.TAS_EVN_UID');
            $criteria->addSelectColumn($alias . '.TAS_BOUNDARY');
            $criteria->addSelectColumn($alias . '.TAS_DERIVATION_SCREEN_TPL');
            $criteria->addSelectColumn($alias . '.TAS_SELFSERVICE_TIMEOUT');
            $criteria->addSelectColumn($alias . '.TAS_SELFSERVICE_TIME');
            $criteria->addSelectColumn($alias . '.TAS_SELFSERVICE_TIME_UNIT');
            $criteria->addSelectColumn($alias . '.TAS_SELFSERVICE_TRIGGER_UID');
        }
    }

    /**
     * Returns the number of rows matching criteria.
     *
     * @param      Criteria $criteria
     * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
     * @param      PropelPDO $con
     * @return     int Number of matching rows.
     */
    public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
    {
        // we may modify criteria, so copy it first
        $criteria = clone $criteria;

        // We need to set the primary table name, since in the case that there are no WHERE columns
        // it will be impossible for the BasePeer::createSelectSql() method to determine which
        // tables go into the FROM clause.
        $criteria->setPrimaryTableName(TaskPeer::TABLE_NAME);

        if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
            $criteria->setDistinct();
        }

        if (!$criteria->hasSelectClause()) {
            TaskPeer::addSelectColumns($criteria);
        }

        $criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
        $criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

        if ($con === null) {
            $con = Propel::getConnection(TaskPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }
        // BasePeer returns a PDOStatement
        $stmt = BasePeer::doCount($criteria, $con);

        if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $count = (int) $row[0];
        } else {
            $count = 0; // no rows returned; we infer that means 0 matches.
        }
        $stmt->closeCursor();
        return $count;
    }
    /**
     * Selects one object from the DB.
     *
     * @param      Criteria $criteria object used to create the SELECT statement.
     * @param      PropelPDO $con
     * @return     Task
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
    {
        $critcopy = clone $criteria;
        $critcopy->setLimit(1);
        $objects = TaskPeer::doSelect($critcopy, $con);
        if ($objects) {
            return $objects[0];
        }
        return null;
    }
    /**
     * Selects several row from the DB.
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con
     * @return     array Array of selected Objects
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doSelect(Criteria $criteria, PropelPDO $con = null)
    {
        return TaskPeer::populateObjects(TaskPeer::doSelectStmt($criteria, $con));
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement durirectly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     * @return     PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TaskPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TaskPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
     *
     * Use this method directly if you want to work with an executed statement durirectly (for example
     * to perform your own object hydration).
     *
     * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
     * @param      PropelPDO $con The connection to use
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     * @return     PDOStatement The executed PDOStatement object.
     * @see        BasePeer::doSelect()
     */
    public static function doSelectRS(Criteria $criteria, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TaskPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        if (!$criteria->hasSelectClause()) {
            $criteria = clone $criteria;
            TaskPeer::addSelectColumns($criteria);
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        // BasePeer returns a PDOStatement
        return BasePeer::doSelect($criteria, $con);
    }
    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doSelect*()
     * methods in your stub classes -- you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by doSelect*()
     * and retrieveByPK*() calls.
     *
     * @param      Task $value A Task object.
     * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
     */
    public static function addInstanceToPool($obj, $key = null)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if ($key === null) {
                $key = (string) $obj->getTasUid();
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param      mixed $value A Task object or a primary key value.
     */
    public static function removeInstanceFromPool($value)
    {
        if (Propel::isInstancePoolingEnabled() && $value !== null) {
            if (is_object($value) && $value instanceof Task) {
                $key = (string) $value->getTasUid();
            } elseif (is_scalar($value)) {
                // assume we've been passed a primary key
                $key = (string) $value;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or Task object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
    } // removeInstanceFromPool()

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
     * @return     Task Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
     * @see        getPrimaryKeyHash()
     */
    public static function getInstanceFromPool($key)
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (isset(self::$instances[$key])) {
                return self::$instances[$key];
            }
        }
        return null; // just to be explicit
    }

    /**
     * Clear the instance pool.
     *
     * @return     void
     */
    public static function clearInstancePool()
    {
        self::$instances = array();
    }

    /**
     * Method to invalidate the instance pool of all tables related to TASK
     * by a foreign key with ON DELETE CASCADE
     */
    public static function clearRelatedInstancePool()
    {
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
     */
    public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[$startcol + 1] === null) {
            return null;
        }
        return (string) $row[$startcol + 1];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @return     mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow($row, $startcol = 0)
    {
        return (string) $row[$startcol + 1];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function populateObjects(PDOStatement $stmt)
    {
        $results = array();
        // set the class once to avoid overhead in the loop
        $cls = TaskPeer::getOMClass(false);
        // populate the object(s)
        while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
            $key = TaskPeer::getPrimaryKeyHashFromRow($row, 0);
            if (null !== ($obj = TaskPeer::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                TaskPeer::addInstanceToPool($obj, $key);
            } // if key exists
        }
        $stmt->closeCursor();
        return $results;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param      array $row PropelPDO resultset row.
     * @param      int $startcol The 0-based offset for reading from the resultset row.
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     * @return     array (Task object, last column rank)
     */
    public static function populateObject($row, $startcol = 0)
    {
        $key = TaskPeer::getPrimaryKeyHashFromRow($row, $startcol);
        if (null !== ($obj = TaskPeer::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $startcol, true); // rehydrate
            $col = $startcol + TaskPeer::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = TaskPeer::OM_CLASS;
            $obj = new $cls();
            $col = $obj->hydrate($row, $startcol);
            TaskPeer::addInstanceToPool($obj, $key);
        }
        return array($obj, $col);
    }

    /**
     * Returns the TableMap related to this peer.
     * This method is not needed for general use but a specific application could have a need.
     * @return     TableMap
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function getTableMap()
    {
        return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
    }

    /**
     * Add a TableMap instance to the database for this peer class.
     */
    public static function buildTableMap()
    {
        $dbMap = Propel::getDatabaseMap(BaseTaskPeer::DATABASE_NAME);
        if (!$dbMap->hasTable(BaseTaskPeer::TABLE_NAME)) {
            $dbMap->addTableObject(new TaskTableMap());
        }
    }

    /**
     * The class that the Peer will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is tranalted into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param      boolean $withPrefix Whether or not to return the path with the class name
     * @return     string path.to.ClassName
     */
    public static function getOMClass($withPrefix = true)
    {
        return $withPrefix ? TaskPeer::CLASS_DEFAULT : TaskPeer::OM_CLASS;
    }

    /**
     * Performs an INSERT on the database, given a Task or Criteria object.
     *
     * @param      mixed $values Criteria or Task object containing data that is used to create the INSERT statement.
     * @param      PropelPDO $con the PropelPDO connection to use
     * @return     mixed The new primary key.
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doInsert($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TaskPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity
        } else {
            $criteria = $values->buildCriteria(); // build Criteria from Task object
        }


        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        try {
            // use transaction because $criteria could contain info
            // for more than one table (I guess, conceivably)
            $con->beginTransaction();
            $pk = BasePeer::doInsert($criteria, $con);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }

        return $pk;
    }

    /**
     * Performs an UPDATE on the database, given a Task or Criteria object.
     *
     * @param      mixed $values Criteria or Task object containing data that is used to create the UPDATE statement.
     * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
     * @return     int The number of affected rows (if supported by underlying database driver).
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doUpdate($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TaskPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        $selectCriteria = new Criteria(self::DATABASE_NAME);

        if ($values instanceof Criteria) {
            $criteria = clone $values; // rename for clarity

            $comparison = $criteria->getComparison(TaskPeer::TAS_UID);
            $value = $criteria->remove(TaskPeer::TAS_UID);
            if ($value) {
                $selectCriteria->add(TaskPeer::TAS_UID, $value, $comparison);
            } else {
                $selectCriteria->setPrimaryTableName(TaskPeer::TABLE_NAME);
            }

        } else {
            // $values is Task object
            $criteria = $values->buildCriteria(); // gets full criteria
            $selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
        }

        // set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        return BasePeer::doUpdate($selectCriteria, $criteria, $con);
    }

    /**
     * Deletes all rows from the TASK table.
     *
     * @param      PropelPDO $con the connection to use
     * @return     int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TaskPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }
        $affectedRows = 0; // initialize var to track total num of affected rows
        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();
            $affectedRows += BasePeer::doDeleteAll(TaskPeer::TABLE_NAME, $con, TaskPeer::DATABASE_NAME);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            TaskPeer::clearInstancePool();
            TaskPeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Performs a DELETE on the database, given a Task or Criteria object OR a primary key value.
     *
     * @param      mixed $values Criteria or Task object or primary key or array of primary keys
     *             which is used to create the DELETE statement
     * @param      PropelPDO $con the connection to use
     * @return     int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *             if supported by native driver or if emulated using Propel.
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function doDelete($values, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TaskPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
        }

        if ($values instanceof Criteria) {
            // invalidate the cache for all objects of this type, since we have no
            // way of knowing (without running a query) what objects should be invalidated
            // from the cache based on this Criteria.
            TaskPeer::clearInstancePool();
            // rename for clarity
            $criteria = clone $values;
        } elseif ($values instanceof Task) { // it's a model object
            // invalidate the cache for this single object
            TaskPeer::removeInstanceFromPool($values);
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else {
            // it's a primary key, or an array of pks
            $criteria = new Criteria(self::DATABASE_NAME);
            $criteria->add(TaskPeer::TAS_UID, (array) $values, Criteria::IN);
            // invalidate the cache for this object(s)
            foreach ((array) $values as $singleval) {
                TaskPeer::removeInstanceFromPool($singleval);
            }
        }

        // Set the correct dbName
        $criteria->setDbName(self::DATABASE_NAME);

        $affectedRows = 0; // initialize var to track total num of affected rows

        try {
            // use transaction because $criteria could contain info
            // for more than one table or we could emulating ON DELETE CASCADE, etc.
            $con->beginTransaction();

            $affectedRows += BasePeer::doDelete($criteria, $con);
            TaskPeer::clearRelatedInstancePool();
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollBack();
            throw $e;
        }
    }

    /**
     * Validates all modified columns of given Task object.
     * If parameter $columns is either a single column name or an array of column names
     * than only those columns are validated.
     *
     * NOTICE: This does not apply to primary or foreign keys for now.
     *
     * @param      Task $obj The object to validate.
     * @param      mixed $cols Column name or array of column names.
     *
     * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
     */
    public static function doValidate($obj, $cols = null)
    {
        $columns = array();

        if ($cols) {
            $dbMap = Propel::getDatabaseMap(TaskPeer::DATABASE_NAME);
            $tableMap = $dbMap->getTable(TaskPeer::TABLE_NAME);

            if (! is_array($cols)) {
                $cols = array($cols);
            }

            foreach ($cols as $colName) {
                if ($tableMap->containsColumn($colName)) {
                    $get = 'get' . $tableMap->getColumn($colName)->getPhpName();
                    $columns[$colName] = $obj->$get();
                }
            }
        } else {

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_TYPE))
            $columns[TaskPeer::TAS_TYPE] = $obj->getTasType();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_TIMEUNIT))
            $columns[TaskPeer::TAS_TIMEUNIT] = $obj->getTasTimeunit();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_ALERT))
            $columns[TaskPeer::TAS_ALERT] = $obj->getTasAlert();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_ASSIGN_TYPE))
            $columns[TaskPeer::TAS_ASSIGN_TYPE] = $obj->getTasAssignType();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_ASSIGN_LOCATION))
            $columns[TaskPeer::TAS_ASSIGN_LOCATION] = $obj->getTasAssignLocation();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_ASSIGN_LOCATION_ADHOC))
            $columns[TaskPeer::TAS_ASSIGN_LOCATION_ADHOC] = $obj->getTasAssignLocationAdhoc();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_TRANSFER_FLY))
            $columns[TaskPeer::TAS_TRANSFER_FLY] = $obj->getTasTransferFly();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_CAN_UPLOAD))
            $columns[TaskPeer::TAS_CAN_UPLOAD] = $obj->getTasCanUpload();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_VIEW_UPLOAD))
            $columns[TaskPeer::TAS_VIEW_UPLOAD] = $obj->getTasViewUpload();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_VIEW_ADDITIONAL_DOCUMENTATION))
            $columns[TaskPeer::TAS_VIEW_ADDITIONAL_DOCUMENTATION] = $obj->getTasViewAdditionalDocumentation();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_CAN_CANCEL))
            $columns[TaskPeer::TAS_CAN_CANCEL] = $obj->getTasCanCancel();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_CAN_PAUSE))
            $columns[TaskPeer::TAS_CAN_PAUSE] = $obj->getTasCanPause();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_CAN_SEND_MESSAGE))
            $columns[TaskPeer::TAS_CAN_SEND_MESSAGE] = $obj->getTasCanSendMessage();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_CAN_DELETE_DOCS))
            $columns[TaskPeer::TAS_CAN_DELETE_DOCS] = $obj->getTasCanDeleteDocs();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_SELF_SERVICE))
            $columns[TaskPeer::TAS_SELF_SERVICE] = $obj->getTasSelfService();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_START))
            $columns[TaskPeer::TAS_START] = $obj->getTasStart();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_TO_LAST_USER))
            $columns[TaskPeer::TAS_TO_LAST_USER] = $obj->getTasToLastUser();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_SEND_LAST_EMAIL))
            $columns[TaskPeer::TAS_SEND_LAST_EMAIL] = $obj->getTasSendLastEmail();

        if ($obj->isNew() || $obj->isColumnModified(TaskPeer::TAS_DERIVATION))
            $columns[TaskPeer::TAS_DERIVATION] = $obj->getTasDerivation();

        }

        return BasePeer::doValidate(TaskPeer::DATABASE_NAME, TaskPeer::TABLE_NAME, $columns);
    }

    /**
     * Retrieve a single object by pkey.
     *
     * @param      string $pk the primary key.
     * @param      PropelPDO $con the connection to use
     * @return     Task
     */
    public static function retrieveByPK($pk, PropelPDO $con = null)
    {

        if (null !== ($obj = TaskPeer::getInstanceFromPool((string) $pk))) {
            return $obj;
        }

        if ($con === null) {
            $con = Propel::getConnection(TaskPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $criteria = new Criteria(TaskPeer::DATABASE_NAME);
        $criteria->add(TaskPeer::TAS_UID, $pk);

        $v = TaskPeer::doSelect($criteria, $con);

        return !empty($v) > 0 ? $v[0] : null;
    }
    /**
     * Retrieve multiple objects by pkey.
     *
     * @param      array $pks List of primary keys
     * @param      PropelPDO $con the connection to use
     * @throws     PropelException Any exceptions caught during processing will be
     *             rethrown wrapped into a PropelException.
     */
    public static function retrieveByPKs($pks, PropelPDO $con = null)
    {
        if ($con === null) {
            $con = Propel::getConnection(TaskPeer::DATABASE_NAME, Propel::CONNECTION_READ);
        }

        $objs = null;
        if (empty($pks)) {
            $objs = array();
        } else {
            $criteria = new Criteria(TaskPeer::DATABASE_NAME);
            $criteria->add(TaskPeer::TAS_UID, $pks, Criteria::IN);
            $objs = TaskPeer::doSelect($criteria, $con);
        }
        return $objs;
    }

}
// BaseTaskPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseTaskPeer::buildTableMap();

