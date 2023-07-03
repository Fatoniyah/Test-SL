#include <stdio.h>
#include <ctype.h>

int main() {
    char input[100];

    printf("Enter Character: ");
    fgets(input, sizeof(input), stdin);

    printf("result:\n");

    int count = 0;
    for (int i = 0; input[i] != '\0'; i++) {
        if (isdigit(input[i])) {
            printf("%c ", input[i]);
            count++;
            if (count % 5 == 0) {
                printf("\n");
            }
        }
    }

    return 0;
}

