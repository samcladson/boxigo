<?php

class MY_Loader extends CI_Loader {
    
    public function template($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
            $content  = $this->view('templates/header', $vars, $return);
            $content .= $this->view($template_name, $vars, $return);
            $content .= $this->view('templates/footer', $vars, $return);

            return $content;
        else:
            $this->view('templates/header', $vars);
            $this->view($template_name, $vars);
            $this->view('templates/footer', $vars);
        endif;
    }

    public function user_dashboard($template_name, $vars = array(), $return = FALSE)
    {
        if($return):
            $content  = $this->view('templates/header', $vars, $return);
            $content .= '<div class="container"><div class="row">';
            $content .= $this->view('templates/sidebar_dashboard', $vars, $return);
            $content .= $this->view('dashboard/'.$template_name, $vars, $return);
            $content .= '</div></div>';
            $content .= $this->view('templates/footer', $vars, $return);

            return $content;
        else:
            $this->view('templates/header', $vars);
            $this->view('templates/sidebar_dashboard', $vars, $return);
            $this->view('dashboard/'.$template_name, $vars);
            $this->view('templates/footer', $vars);
        endif;
    }
}

?>