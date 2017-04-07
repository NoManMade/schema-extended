<?php namespace SchemaExtended;

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
     * @return \Illuminate\Support\Fluent
     */
    public function integer($column, $autoIncrement = false, $unsigned = false, $length)
    {
        return $this->addColumn('integer', $column, compact('autoIncrement', 'unsigned', 'length'));
    }

}
