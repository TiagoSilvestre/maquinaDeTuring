<?php

class Linha
{
    private $num = 0;

    public function __construct()
    {

        $ret = " <td><?php $this->num; ?></td>\n";
        $ret .= "\n";
        $ret .=  "<td>(\n";
        $ret .= "<select name=\"<?php echo 'escreve:'.$this->num.':*'; ?>\">\n";
        $ret .= "<option></option>\n";
        $ret .= "<option value=\"*\">*</option>\n";
        $ret .= "<option value=\"vazio\">&Oslash;</option>\n";
        $ret .= "<option value=\"a\">A</option>\n";
        $ret .= "<option value=\"b\">B</option>\n";
        $ret .= "<option value=\"inicial\">&rarr;</option>\n";
        $ret .= "<option value=\"fim\">F</option>\n";
        $ret .= "</select>,\n";
        $ret .= "\n";
        $ret .= "<input type=\"text\" class=\"inpEst\" name=\"<?php echo 'proxEstado:'.$this->num.':*'; ?>\">,\n";
        $ret .= "\n";
        $ret .= "<select name=\"<?php echo 'direcao:'.$this->num.':*'; ?>\">\n";
        $ret .= "<option></option>\n";
        $ret .= "<option value=\"D\">D</option>\n";
        $ret .= "<option value=\"E\">E</option>\n";
        $ret .= "</select>\n";
        $ret .= ")\n";
        $ret .= "</td>\n";
        $ret .= "\n";
        $ret .= "\n";
        $ret .= "<td>(\n";
        $ret .= "<select name=\"<?php echo 'escreve:'.$this->num.':vazio'; ?>\">\n";
        $ret .= "<option></option>\n";
        $ret .= "<option value=\"*\">*</option>\n";
        $ret .= "<option value=\"vazio\">&Oslash;</option>\n";
        $ret .= "<option value=\"a\">A</option>\n";
        $ret .= "<option value=\"b\">B</option>\n";
        $ret .= "<option value=\"inicial\">&rarr;</option>\n";
        $ret .= "<option value=\"fim\">F</option>\n";
        $ret .= "</select>,\n";
        $ret .= "\n";
        $ret .= "<input type=\"text\" class=\"inpEst\" name=\"<?php echo 'proxEstado:'.$this->num.':vazio'; ?>\">,\n";
        $ret .= "\n";
        $ret .= "<select name=\"<?php echo 'direcao:'.$this->num.':vazio'; ?>\">\n";
        $ret .= "<option></option>\n";
        $ret .= "<option value=\"D\">D</option>\n";
        $ret .= "<option value=\"E\">E</option>\n";
        $ret .= "</select>\n";
        $ret .= ")\n";
        $ret .= "</td>\n";
        $ret .= "\n";
        $ret .= "\n";
        $ret .= "<td>(\n";
        $ret .= "<select name=\"<?php echo 'escreve:'.$this->num.':A'; ?>\">\n";
        $ret .= "<option></option>\n";
        $ret .= "<option value=\"*\">*</option>\n";
        $ret .= "<option value=\"vazio\">&Oslash;</option>\n";
        $ret .= "<option value=\"a\">A</option>\n";
        $ret .= "<option value=\"b\">B</option>\n";
        $ret .= "<option value=\"inicial\">&rarr;</option>\n";
        $ret .= "<option value=\"fim\">F</option>\n";
        $ret .= "</select>,\n";
        $ret .= "\n";
        $ret .= "<input type=\"text\" class=\"inpEst\" name=\"<?php echo 'proxEstado:'.$this->num.':A'; ?>\">,\n";
        $ret .= "\n";
        $ret .= "<select name=\"<?php echo 'direcao:'.$this->num.':A'; ?>\">\n";
        $ret .= "<option></option>\n";
        $ret .= "<option value=\"D\">D</option>\n";
        $ret .= "<option value=\"E\">E</option>\n";
        $ret .= "</select>\n";
        $ret .= ")\n";
        $ret .= "</td>\n";
        $ret .= "\n";
        $ret .= "\n";
        $ret .= "<td>(\n";
        $ret .= "<select name=\"<?php echo 'escreve:'.$this->num.':B'; ?>\">\n";
        $ret .= "<option></option>\n";
        $ret .= "<option value=\"*\">*</option>\n";
        $ret .= "<option value=\"vazio\">&Oslash;</option>\n";
        $ret .= "<option value=\"a\">A</option>\n";
        $ret .= "<option value=\"b\">B</option>\n";
        $ret .= "<option value=\"inicial\">&rarr;</option>\n";
        $ret .= "</select>,\n";
        $ret .= "<option value=\"fim\">F</option>\n";
        $ret .= "\n";
        $ret .= "<input type=\"text\" class=\"inpEst\" name=\"<?php echo 'proxEstado:'.$this->num.':B'; ?>\">,\n";
        $ret .= "\n";
        $ret .= "<select name=\"<?php echo 'direcao:'.$this->num.':B'; ?>\">\n";
        $ret .= "<option></option>\n";
        $ret .= "<option value=\"D\">D</option>\n";
        $ret .= "<option value=\"E\">E</option>\n";
        $ret .= "</select>\n";
        $ret .= ")\n";
        $ret .= "</td>\n";
        $ret .= "\n";
        $ret .= "\n";
        $ret .= "<td>(\n";
        $ret .= "<select name=\"<?php echo 'escreve:'.$this->num.':fim'; ?>\">\n";
        $ret .= "<option></option>\n";
        $ret .= "<option value=\"*\">*</option>\n";
        $ret .= "<option value=\"vazio\">&Oslash;</option>\n";
        $ret .= "<option value=\"a\">A</option>\n";
        $ret .= "<option value=\"b\">B</option>\n";
        $ret .= "<option value=\"inicial\">&rarr;</option>\n";
        $ret .= "<option value=\"fim\">F</option>\n";
        $ret .= "</select>,\n";
        $ret .= "\n";
        $ret .= "<input type=\"text\" class=\"inpEst\" name=\"<?php echo 'proxEstado:'.$this->num.':fim'; ?>\">,\n";
        $ret .= "\n";
        $ret .= "<select name=\"<?php echo 'direcao:'.$this->num.':fim'; ?>\">\n";
        $ret .= "<option></option>\n";
        $ret .= "<option value=\"D\">D</option>\n";
        $ret .= "<option value=\"E\">E</option>\n";
        $ret .= "</select>\n";
        $ret .= ")\n";
        $ret .= "</td>\n";
        $ret .= "\n";
        echo $ret;
    }
}