#include <stdio.h>

int main() {
    int n = 256;
    int i = n;
    int r = 0;

    while (i >= 1) {
        for (int j = 1; j <= n; j++) {
            r = r + 1;
        }
        i = i / 2;
    }

    printf("r = %d\n", r);

    return 0;
}
