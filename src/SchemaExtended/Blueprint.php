<?php
namespace SchemaExtended;

use Illuminate\Database\Schema\Blueprint as IlluminateBlueprint;
use Illuminate\Support\Fluent;

/**
 * Extended version of Blueprint with
 * support of 'set' data type
 */
class Blueprint extends IlluminateBlueprint
{
    /**
     * Create a new integer (4-byte) column on the table.
     *
     * @param  string  $column
     * @param  bool  $autoIncrement
     * @param  bool  $unsigned
     * @param  int  $length
     * @return \Illuminate\Support\Fluent
     */
    public function integer($column, $autoIncrement = false, $unsigned = false, $length = null)
    {
        return $this->addColumn('integer', $column, compact('autoIncrement', 'unsigned', 'length'));
    }

    /**
     * Create a new auto-incrementing integer (4-byte) column on the table.
     *
     * @param  string  $column
     * @param  int  $length
     * @return \Illuminate\Support\Fluent
     */
    public function increments($column, $length = null)
    {
        return $this->unsignedInteger($column, true, $length);
    }

    /**
     * Create a new unsigned integer (4-byte) column on the table.
     *
     * @param  string  $column
     * @param  bool  $autoIncrement
     * @param  int  $length
     * @return \Illuminate\Support\Fluent
     */
    public function unsignedInteger($column, $autoIncrement = false, $length = null)
    {
        return $this->integer($column, $autoIncrement, true, $length);
    }
}
