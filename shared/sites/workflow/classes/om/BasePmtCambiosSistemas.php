<?php

require_once 'propel/om/BaseObject.php';

require_once 'propel/om/Persistent.php';


include_once 'propel/util/Criteria.php';

include_once 'classes/PmtCambiosSistemasPeer.php';

/**
 * Base class that represents a row from the 'PMT_CAMBIOS_SISTEMAS' table.
 *
 * 
 *
 * @package    workflow.classes.om
 */
abstract class BasePmtCambiosSistemas extends BaseObject implements Persistent
{

    /**
     * The Peer class.
     * Instance provides a convenient way of calling static methods on a class
     * that calling code may not be able to identify.
     * @var        PmtCambiosSistemasPeer
    */
    protected static $peer;

    /**
     * The value for the id_cambio_sistema field.
     * @var        int
     */
    protected $id_cambio_sistema;

    /**
     * The value for the nom_cambio_sistema field.
     * @var        string
     */
    protected $nom_cambio_sistema;

    /**
     * The value for the desc_cambio_sistema field.
     * @var        string
     */
    protected $desc_cambio_sistema;

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
     * Get the [id_cambio_sistema] column value.
     * 
     * @return     int
     */
    public function getIdCambioSistema()
    {

        return $this->id_cambio_sistema;
    }

    /**
     * Get the [nom_cambio_sistema] column value.
     * 
     * @return     string
     */
    public function getNomCambioSistema()
    {

        return $this->nom_cambio_sistema;
    }

    /**
     * Get the [desc_cambio_sistema] column value.
     * 
     * @return     string
     */
    public function getDescCambioSistema()
    {

        return $this->desc_cambio_sistema;
    }

    /**
     * Set the value of [id_cambio_sistema] column.
     * 
     * @param      int $v new value
     * @return     void
     */
    public function setIdCambioSistema($v)
    {

        // Since the native PHP type for this column is integer,
        // we will cast the input value to an int (if it is not).
        if ($v !== null && !is_int($v) && is_numeric($v)) {
            $v = (int) $v;
        }

        if ($this->id_cambio_sistema !== $v) {
            $this->id_cambio_sistema = $v;
            $this->modifiedColumns[] = PmtCambiosSistemasPeer::ID_CAMBIO_SISTEMA;
        }

    } // setIdCambioSistema()

    /**
     * Set the value of [nom_cambio_sistema] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setNomCambioSistema($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->nom_cambio_sistema !== $v) {
            $this->nom_cambio_sistema = $v;
            $this->modifiedColumns[] = PmtCambiosSistemasPeer::NOM_CAMBIO_SISTEMA;
        }

    } // setNomCambioSistema()

    /**
     * Set the value of [desc_cambio_sistema] column.
     * 
     * @param      string $v new value
     * @return     void
     */
    public function setDescCambioSistema($v)
    {

        // Since the native PHP type for this column is string,
        // we will cast the input to a string (if it is not).
        if ($v !== null && !is_string($v)) {
            $v = (string) $v;
        }

        if ($this->desc_cambio_sistema !== $v) {
            $this->desc_cambio_sistema = $v;
            $this->modifiedColumns[] = PmtCambiosSistemasPeer::DESC_CAMBIO_SISTEMA;
        }

    } // setDescCambioSistema()

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (1-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param      ResultSet $rs The ResultSet class with cursor advanced to desired record pos.
     * @param      int $startcol 1-based offset column which indicates which restultset column to start with.
     * @return     int next starting column
     * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate(ResultSet $rs, $startcol = 1)
    {
        try {

            $this->id_cambio_sistema = $rs->getInt($startcol + 0);

            $this->nom_cambio_sistema = $rs->getString($startcol + 1);

            $this->desc_cambio_sistema = $rs->getString($startcol + 2);

            $this->resetModified();

            $this->setNew(false);

            // FIXME - using NUM_COLUMNS may be clearer.
            return $startcol + 3; // 3 = PmtCambiosSistemasPeer::NUM_COLUMNS - PmtCambiosSistemasPeer::NUM_LAZY_LOAD_COLUMNS).

        } catch (Exception $e) {
            throw new PropelException("Error populating PmtCambiosSistemas object", $e);
        }
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param      Connection $con
     * @return     void
     * @throws     PropelException
     * @see        BaseObject::setDeleted()
     * @see        BaseObject::isDeleted()
     */
    public function delete($con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PmtCambiosSistemasPeer::DATABASE_NAME);
        }

        try {
            $con->begin();
            PmtCambiosSistemasPeer::doDelete($this, $con);
            $this->setDeleted(true);
            $con->commit();
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Stores the object in the database.  If the object is new,
     * it inserts it; otherwise an update is performed.  This method
     * wraps the doSave() worker method in a transaction.
     *
     * @param      Connection $con
     * @return     int The number of rows affected by this insert/update
     * @throws     PropelException
     * @see        doSave()
     */
    public function save($con = null)
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($con === null) {
            $con = Propel::getConnection(PmtCambiosSistemasPeer::DATABASE_NAME);
        }

        try {
            $con->begin();
            $affectedRows = $this->doSave($con);
            $con->commit();
            return $affectedRows;
        } catch (PropelException $e) {
            $con->rollback();
            throw $e;
        }
    }

    /**
     * Stores the object in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param      Connection $con
     * @return     int The number of rows affected by this insert/update and any referring
     * @throws     PropelException
     * @see        save()
     */
    protected function doSave($con)
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;


            // If this object has been modified, then save it to the database.
            if ($this->isModified()) {
                if ($this->isNew()) {
                    $pk = PmtCambiosSistemasPeer::doInsert($this, $con);
                    $affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
                                         // should always be true here (even though technically
                                         // BasePeer::doInsert() can insert multiple rows).

                    $this->setIdCambioSistema($pk);  //[IMV] update autoincrement primary key

                    $this->setNew(false);
                } else {
                    $affectedRows += PmtCambiosSistemasPeer::doUpdate($this, $con);
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
     * @return     mixed <code>true</code> if all validations pass; 
                   array of <code>ValidationFailed</code> objects otherwise.
     */
    protected function doValidate($columns = null)
    {
        if (!$this->alreadyInValidation) {
            $this->alreadyInValidation = true;
            $retval = null;

            $failureMap = array();


            if (($retval = PmtCambiosSistemasPeer::doValidate($this, $columns)) !== true) {
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
     *                     one of the class type constants TYPE_PHPNAME,
     *                     TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @return     mixed Value of field.
     */
    public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = PmtCambiosSistemasPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
        return $this->getByPosition($pos);
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
                return $this->getIdCambioSistema();
                break;
            case 1:
                return $this->getNomCambioSistema();
                break;
            case 2:
                return $this->getDescCambioSistema();
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
     * @param      string $keyType One of the class type constants TYPE_PHPNAME,
     *                        TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @return     an associative array containing the field names (as keys) and field values
     */
    public function toArray($keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = PmtCambiosSistemasPeer::getFieldNames($keyType);
        $result = array(
            $keys[0] => $this->getIdCambioSistema(),
            $keys[1] => $this->getNomCambioSistema(),
            $keys[2] => $this->getDescCambioSistema(),
        );
        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param      string $name peer name
     * @param      mixed $value field value
     * @param      string $type The type of fieldname the $name is of:
     *                     one of the class type constants TYPE_PHPNAME,
     *                     TYPE_COLNAME, TYPE_FIELDNAME, TYPE_NUM
     * @return     void
     */
    public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
    {
        $pos = PmtCambiosSistemasPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
                $this->setIdCambioSistema($value);
                break;
            case 1:
                $this->setNomCambioSistema($value);
                break;
            case 2:
                $this->setDescCambioSistema($value);
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
     * of the class type constants TYPE_PHPNAME, TYPE_COLNAME, TYPE_FIELDNAME,
     * TYPE_NUM. The default key type is the column's phpname (e.g. 'authorId')
     *
     * @param      array  $arr     An array to populate the object from.
     * @param      string $keyType The type of keys the array uses.
     * @return     void
     */
    public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
    {
        $keys = PmtCambiosSistemasPeer::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdCambioSistema($arr[$keys[0]]);
        }

        if (array_key_exists($keys[1], $arr)) {
            $this->setNomCambioSistema($arr[$keys[1]]);
        }

        if (array_key_exists($keys[2], $arr)) {
            $this->setDescCambioSistema($arr[$keys[2]]);
        }

    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return     Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria()
    {
        $criteria = new Criteria(PmtCambiosSistemasPeer::DATABASE_NAME);

        if ($this->isColumnModified(PmtCambiosSistemasPeer::ID_CAMBIO_SISTEMA)) {
            $criteria->add(PmtCambiosSistemasPeer::ID_CAMBIO_SISTEMA, $this->id_cambio_sistema);
        }

        if ($this->isColumnModified(PmtCambiosSistemasPeer::NOM_CAMBIO_SISTEMA)) {
            $criteria->add(PmtCambiosSistemasPeer::NOM_CAMBIO_SISTEMA, $this->nom_cambio_sistema);
        }

        if ($this->isColumnModified(PmtCambiosSistemasPeer::DESC_CAMBIO_SISTEMA)) {
            $criteria->add(PmtCambiosSistemasPeer::DESC_CAMBIO_SISTEMA, $this->desc_cambio_sistema);
        }


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
        $criteria = new Criteria(PmtCambiosSistemasPeer::DATABASE_NAME);

        $criteria->add(PmtCambiosSistemasPeer::ID_CAMBIO_SISTEMA, $this->id_cambio_sistema);

        return $criteria;
    }

    /**
     * Returns the primary key for this object (row).
     * @return     int
     */
    public function getPrimaryKey()
    {
        return $this->getIdCambioSistema();
    }

    /**
     * Generic method to set the primary key (id_cambio_sistema column).
     *
     * @param      int $key Primary key.
     * @return     void
     */
    public function setPrimaryKey($key)
    {
        $this->setIdCambioSistema($key);
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param      object $copyObj An object of PmtCambiosSistemas (or compatible) type.
     * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @throws     PropelException
     */
    public function copyInto($copyObj, $deepCopy = false)
    {

        $copyObj->setNomCambioSistema($this->nom_cambio_sistema);

        $copyObj->setDescCambioSistema($this->desc_cambio_sistema);


        $copyObj->setNew(true);

        $copyObj->setIdCambioSistema(NULL); // this is a pkey column, so set to default value

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
     * @return     PmtCambiosSistemas Clone of current object.
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
     * @return     PmtCambiosSistemasPeer
     */
    public function getPeer()
    {
        if (self::$peer === null) {
            self::$peer = new PmtCambiosSistemasPeer();
        }
        return self::$peer;
    }
}

