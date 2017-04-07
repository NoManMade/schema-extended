<?php
namespace SchemaExtended;

use Illuminate\Database\Schema\Grammars\MySqlGrammar as IlluminateMySqlGrammar;
use Illuminate\Support\Fluent;

/**
 * Extended version of MySqlGrammar with
 * support of 'set' data type
 */
class MySqlGrammar extends IlluminateMySqlGrammar
{

    /**
     * Create the column definition for an integer type.
     *
     * @param  \Illuminate\Support\Fluent  $column
     * @return string
     */
    protected function typeInteger(Fluent $column)
    {
        if ($column->length) {
            return "int({$column->length})";
        }
        return 'int';
    }
}
