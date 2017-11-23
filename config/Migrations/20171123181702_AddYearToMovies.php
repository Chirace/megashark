<?php
use Migrations\AbstractMigration;

class AddYearToMovies extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('movies');
        $table->addColumn('year', 'date', [
            'default' => null,
            'null' => true,
        ]);
        $table->update();
    }
}
