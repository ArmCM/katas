package tests

import (
    "katas/pkg/fizz_buzz"
    "testing"
)

func TestConvert(t *testing.T) {
    tests := []struct {
        name     string
        input    int
        expected interface{}
    }{
        {
            name:     "devuelve el mismo número si no es divisible por 3 o 5",
            input:    1,
            expected: 1,
        },
        {
            name:     "devuelve fizz si es divisible por 3",
            input:    3,
            expected: "fizz",
        },
        {
            name:     "devuelve buzz si es divisible por 5",
            input:    5,
            expected: "buzz",
        },
        {
            name:     "devuelve fizzbuzz si es divisible por 3 y 5",
            input:    15,
            expected: "fizzbuzz",
        },
    }

    for _, tt := range tests {
        t.Run(tt.name, func(t *testing.T) {
            got := fizz_buzz.Convert(tt.input)
            if got != tt.expected {
                t.Errorf("Convert(%d) = %v, quiere %v", tt.input, got, tt.expected)
            }
        })
    }
}
