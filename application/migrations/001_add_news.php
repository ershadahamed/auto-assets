<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Migration_Add_news extends CI_Migration
{

    public function up()
    {
        $this->dbforge->add_field(array(
            'id' => array(
                'type' => 'INT',
                'constraint' => 11,
                'unsigned' => TRUE,
                'auto_increment' => TRUE
            ),
            'title' => array(
                'type' => 'VARCHAR',
                'constraint' => '128',
                'not_null' => TRUE
            ),
            'slug' => array(
                'type' => 'VARCHAR',
                'constraint' => '128',
                'not_null' => TRUE
            ),
            'text' => array(
                'type' => 'TEXT',
                'not_null' => TRUE
            ),
        ));
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->add_key('slug');
        $this->dbforge->create_table('news', TRUE);
    }

    public function down()
    {
        $this->dbforge->drop_table('news', TRUE);
    }
}
