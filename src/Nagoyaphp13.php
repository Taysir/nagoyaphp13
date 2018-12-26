<?php

namespace Ttskch\Nagoyaphp13;

class Nagoyaphp13
{
    public function run(string $input): string
    {

        $target = [
            [0, 0, 0, 0, 0],
            [0, 1, 2, 3, 0],
            [0, 4, 5, 6, 0],
            [0, 7, 8, 9, 0],
            [0, 0, 0, 0, 0]
        ];

        foreach (str_split($input) as $command) {
            switch ($command) {
                case 'a':
                    $target[1][0] = $target[1][1];
                    $target[1][1] = $target[1][2];
                    $target[1][2] = $target[1][3];
                    $target[1][3] = $target[1][0];
                    break;
                case 'b':
                    $target[2][0] = $target[2][1];
                    $target[2][1] = $target[2][2];
                    $target[2][2] = $target[2][3];
                    $target[2][3] = $target[2][0];
                    break;
                case 'c':
                    $target[3][0] = $target[3][1];
                    $target[3][1] = $target[3][2];
                    $target[3][2] = $target[3][3];
                    $target[3][3] = $target[3][0];
                    break;
                case 'd':
                    $target[4][1] = $target[3][1];
                    $target[3][1] = $target[2][1];
                    $target[2][1] = $target[1][1];
                    $target[1][1] = $target[4][1];
                    break;
                case 'e':
                    $target[4][2] = $target[3][2];
                    $target[3][2] = $target[2][2];
                    $target[2][2] = $target[1][2];
                    $target[1][2] = $target[4][2];
                    break;
                case 'f':
                    $target[4][3] = $target[3][3];
                    $target[3][3] = $target[2][3];
                    $target[2][3] = $target[1][3];
                    $target[1][3] = $target[4][3];
                    break;
                case 'g':
                    $target[3][4] = $target[3][3];
                    $target[3][3] = $target[3][2];
                    $target[3][2] = $target[3][1];
                    $target[3][1] = $target[3][4];
                    break;
                case 'h':
                    $target[2][4] = $target[2][3];
                    $target[2][3] = $target[2][2];
                    $target[2][2] = $target[2][1];
                    $target[2][1] = $target[2][4];
                    break;
                case 'i':
                    $target[1][4] = $target[1][3];
                    $target[1][3] = $target[1][2];
                    $target[1][2] = $target[1][1];
                    $target[1][1] = $target[1][4];
                    break;
                case 'j':
                    $target[0][3] = $target[1][3];
                    $target[1][3] = $target[2][3];
                    $target[2][3] = $target[3][3];
                    $target[3][3] = $target[0][3];
                    break;
                case 'k':
                    $target[0][2] = $target[1][2];
                    $target[1][2] = $target[2][2];
                    $target[2][2] = $target[3][2];
                    $target[3][2] = $target[0][2];
                    break;
                case 'l':
                    $target[0][1] = $target[1][1];
                    $target[1][1] = $target[2][1];
                    $target[2][1] = $target[3][1];
                    $target[3][1] = $target[0][1];
                    break;
                default:
                    break;
            }
        }
        $result = '';
        for ($i = 1; $i < 4; $i++) {
            for ($j = 1; $j < 4; $j++) {
                $result .= $target[$i][$j];
            }
            $result .= '/';
        }
        return trim($result, '/');
    }
}
