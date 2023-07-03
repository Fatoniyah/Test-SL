#include <stdio.h>
#include <math.h>

int main() {
    int x = 1;
    int i = 1;
    
    while (x <= 1000) {
        x = pow(2, x);
        i = i + 1;
    }
    
    printf("i = %d\n", i);
    
    return 0;
}
