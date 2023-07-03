#include <stdio.h>
 
int main()
{
    float score;
     
    printf("Enter score : ");
    scanf("%f", &score);
     
    if(score >= 80 && score <= 100){
        printf("A");
    }
    else if(score >= 70 && score <= 79.9){
        printf("B");
    }
    else if(score >= 60 && score <= 69.9){
        printf("C");
    }
    else if(score >= 50 && score <= 59.9){
        printf("D");
    }
    else if(score >= 0 && score <= 49.9){
        printf("E");
    }else{
    	printf("ERROR");
	}
    
    
    return 0;
}