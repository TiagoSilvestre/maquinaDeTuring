<?php

class Linha
{
    private $num = 0;

    public function __construct()
    {

    ?>
        <td><?php echo $this->num; ?></td>

        <td>(
            <select name="<?php echo 'escreve:'.$this->num.':*'; ?>">
                <option></option>
                <option value="*">*</option>
                <option value="vazio">&Oslash;</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="inicial">&rarr;</option>
                <option value="fim">F</option>
            </select>,

            <input type="text" class="inpEst" name="<?php echo 'proxEstado:'.$this->num.':*'; ?>">,

            <select name="<?php echo 'direcao:'.$this->num.':*'; ?>">
                <option></option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select>
            )
        </td>


        <td>(
            <select name="<?php echo 'escreve:'.$this->num.':vazio'; ?>">
                <option></option>
                <option value="*">*</option>
                <option value="vazio">&Oslash;</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="inicial">&rarr;</option>
                <option value="fim">F</option>
            </select>,

            <input type="text" class="inpEst" name="<?php echo 'proxEstado:'.$this->num.':vazio'; ?>">,

            <select name="<?php echo 'direcao:'.$this->num.':vazio'; ?>">
                <option></option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select>
            )
        </td>


        <td>(
            <select name="<?php echo 'escreve:'.$this->num.':A'; ?>">
                <option></option>
                <option value="*">*</option>
                <option value="vazio">&Oslash;</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="inicial">&rarr;</option>
                <option value="fim">F</option>
            </select>,

            <input type="text" class="inpEst" name="<?php echo 'proxEstado:'.$this->num.':A'; ?>">,

            <select name="<?php echo 'direcao:'.$this->num.':A'; ?>">
                <option></option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select>
            )
        </td>


        <td>(
            <select name="<?php echo 'escreve:'.$this->num.':B'; ?>">
                <option></option>
                <option value="*">*</option>
                <option value="vazio">&Oslash;</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="inicial">&rarr;</option>
                <option value="fim">F</option>
            </select>,

            <input type="text" class="inpEst" name="<?php echo 'proxEstado:'.$this->num.':B'; ?>">,

            <select name="<?php echo 'direcao:'.$this->num.':B'; ?>">
                <option></option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select>
            )
        </td>


        <td>(
            <select name="<?php echo 'escreve:'.$this->num.':fim'; ?>">
                <option></option>
                <option value="*">*</option>
                <option value="vazio">&Oslash;</option>
                <option value="a">A</option>
                <option value="b">B</option>
                <option value="inicial">&rarr;</option>
                <option value="fim">F</option>
            </select>,

            <input type="text" class="inpEst" name="<?php echo 'proxEstado:'.$this->num.':fim'; ?>">,

            <select name="<?php echo 'direcao:'.$this->num.':fim'; ?>">
                <option></option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select>
            )
        </td>


        <?php
    }
}