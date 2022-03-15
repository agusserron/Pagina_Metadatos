<?php
class metadatos_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
        
        public function get_metadato($slug = FALSE)
        {
                if ($slug === FALSE)
                {
                        $query = $this->db->get('metadato');
                        return $query->result_array();
                }
        
                $query = $this->db->get_where('metadato', array('slug' => $slug));
                return $query->row_array();
        }

        
        public function set_metadato()
        {
        $this->load->helper('url');

         $slug = url_title($this->input->post('titulo'), 'dash', TRUE);

         $data = array(
        'titulo' => $this->input->post('titulo'),
        'slug' => $slug,
        'descripcion' => $this->input->post('descripcion'),
        'proposito' => $this->input->post('proposito'),
        'PalabrasClaveT' => $this->input->post('PalabrasClaveT'),
        'PalabrasClaveG' => $this->input->post('PalabrasClaveG')
         );

        return $this->db->insert('metadato', $data);
        }

        function ValidarUsuario($usuario,$contraseña){         //   Consulta Mysql para buscar en la tabla Usuario aquellos usuarios que coincidan con el mail y password ingresados en pantalla de login
                $query = $this->db->where('usuario',$usuario);   //   La consulta se efectúa mediante Active Record. Una manera alternativa, y en lenguaje más sencillo, de generar las consultas Sql.
                $query = $this->db->where('contraseña',$contraseña);
                $query = $this->db->get('usuarios');
                return $query->row();    //   Devolvemos al controlador la fila que coincide con la búsqueda. (FALSE en caso que no existir coincidencias)
        }

        function usuarioIncorrecto($variable){
                if($variable == TRUE) {
                        echo "<script> alert('Usuario correcto'); </script>";
                } else {
                        echo "<script> alert('Usuario incorrecto'); </script>";
                }
        }


        

}