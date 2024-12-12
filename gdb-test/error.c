#include <locale.h>
#include <stdio.h>
#include <time.h>

int main(void) {

    char buff[70];
    struct tm my_time = {
        .tm_year = 112,
        .tm_mon = 9,
        .tm_mday = 12,
        .tm_hour = 8,
        .tm_min = 20,
        .tm_sec = 30
    };

    if (strftime(buff, sizeof buff, "%A %c", &my_time)) {
        puts(buff);
    }
    else {
        puts("strftime failed...!");
    }

    setlocale()
}