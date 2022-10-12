<?php
namespace System\Database\Eloquent;

use System\Database\DB;
use System\Database\FluentApi;
use System\Database\Grammer\Grammer;

class Eloquent extends FluentApi
{

    protected $table;
    protected $massive_data;
    protected $data;

    protected static function decamelize(string $camelCase)
    {
        return Grammer::plural(strtolower(preg_replace('/(?<!^)[A-Z]/', '_$0', $camelCase)));
    }

    protected function snakeToCamel($input)
    {
        return lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $input))));
    }


    public static function where(string $column, string $value, string $operator = '=')
    {
        $table_name = explode("\\", get_called_class());
        $table_name = self::decamelize($table_name[(count($table_name) - 1)]);
        
        if(property_exists(get_called_class(), 'tableName'))
        {
          $class = get_called_class();
          $class = new $class;
          $table_name = $class->tableName;
        }

        return DB::table($table_name)->where($column, $value, $operator);
    }

    /**
     * Find a model in the database by ID
     *
     * @param int|string $id
     * @param string $column defaults to id
     * @return \System\Database\DatabaseManager
     */
    public static function find($id, string $column = 'id')
    {
        $table_name = explode("\\", get_called_class());
        $table_name = self::decamelize($table_name[(count($table_name) - 1)]);
        
        if(property_exists(get_called_class(), 'tableName'))
        {
          $class = get_called_class();
          $class = new $class;
          $table_name = $class->tableName;
        }

        return DB::table($table_name)->row()->where($column, $id);
    }


    /**
     * Get all of the models from the database.
     *
     * @return obejct
     */
    public static function all()
    {
        $table_name = explode("\\", get_called_class());
        $table_name = self::decamelize($table_name[(count($table_name) - 1)]);
        
        if(property_exists(get_called_class(), 'tableName'))
        {
          $class = get_called_class();
          $class = new $class;
          $table_name = $class->tableName;
        }
        return DB::table($table_name)->get();
    }


    /**
     * Save the model to the database.
     *
     * @return bool
     */
    public function save()
    {
      if(empty($this->data))
      {
        $this->data = $this->massive_data;
      }

      if(!empty($this->data) && !empty($this->massive_data))
      {
        $this->data = array_merge($this->massive_data, $this->data);
      }
      return DB::table($this->table)->save($this->data);
    }


    /**
     * Get the last Insert Id of the resource
     *
     * @return int
     */
    public function lastId()
    {
      return DB::lastId();
    }

    /**
     * Get the number of models saved
     *
     * @return int
     */
    public function affectedRows()
    {
      return DB::affectedRows();
    }


    /**
     * Join 2 models
     *
     * @param string $model Model Name
     * @return \System\Database\DatabaseManager
     */
    public static function with($model)
    {
      if(!is_array($model))
      {
        $model = explode(',', $model);
      }

      $table_name = explode("\\", get_called_class());
      $table_name = self::decamelize($table_name[(count($table_name) - 1)]);

      if(property_exists(get_called_class(), 'tableName'))
      {
        $class = get_called_class();
        $class = new $class;
        $table_name = $class->tableName;
      }

      $first_table = $model[0];
      return DB::table($table_name)->
      join(Grammer::plural($first_table), $table_name.".". $first_table . "_id",
       Grammer::plural($first_table) . ".id");

    }

    /**
     * Add a JOIN  the models
     *
     * @param string $table table to join
     * @param string $first table.primary key
     * @param string $second table.forgein key
     * @param string $join TYPE OF JOIN, defaults to INNER
     * @return \System\Database\DatabaseManager
     */
    public static function join(string $table, string $first, string $second, string $join = 'INNER')
    {
      $table_name = explode("\\", get_called_class());
      $table_name = self::decamelize($table_name[(count($table_name) - 1)]);

      if(property_exists(get_called_class(), 'tableName'))
      {
        $class = get_called_class();
        $class = new $class;
        $table_name = $class->tableName;
      }

      switch(strtolower($join))
      {
        case 'right':
          return DB::table($table_name)->rightJoin($table, $first, $second);
          break;

        case 'left': 
          return DB::table($table_name)->leftJoin($table, $first, $second);
          break;

        default: 
          return DB::table($table_name)->join($table, $first, $second);
      }
    }


    /**
     * Get models in a specific range
     *
     * @param string $column
     * @param integer $start
     * @param integer $end
     * @return \System\Database\DatabaseManager
     */
    public static function between(string $column, int $start, int $end)
    {
      $table_name = explode("\\", get_called_class());
      $table_name = self::decamelize($table_name[(count($table_name) - 1)]);

      if(property_exists(get_called_class(), 'tableName'))
      {
        $class = get_called_class();
        $class = new $class;
        $table_name = $class->tableName;
      }

      return DB::table($table_name)->between($column, $start, $end);
    }


    /**
     * Select data between the provided range of rows;
     *
     * @param integer $start
     * @param integer $end
     * @return \System\Database\DatabaseManager
     */
    public static function range(int $start, int $end)
    {
      $table_name = explode("\\", get_called_class());
      $table_name = self::decamelize($table_name[(count($table_name) - 1)]);

      if(property_exists(get_called_class(), 'tableName'))
      {
        $class = get_called_class();
        $class = new $class;
        $table_name = $class->tableName;
      }

      return DB::table($table_name)->range($start, $end);
    }
}
