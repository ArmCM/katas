package main

import (
    "fmt"
    "katas/pkg/fizz_buzz"
)

func main() {

    for i := 1; i <= 15; i++ {
        result := fizz_buzz.Convert(i)

        fmt.Printf("%d: %v\n", i, result)
    }
}
