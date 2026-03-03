```mermaid
erDiagram
    UZYTKOWNIK ||--o{ REZERWACJA : sklada
    SESJA ||--o{ REZERWACJA : dotyczy
    REZERWACJA ||--o{ BILET : zawiera
    TYP_BILETU ||--o{ BILET : okresla
    BILET |o--o{ WYPOZYCZENIE : moze_miec
    TYP_SPRZETU ||--o{ WYPOZYCZENIE : "okresla rodzaj"

    UZYTKOWNIK {
        int id PK
        string imie
        string nazwisko
        string email 
        string numer_telefonu
        string haslo
    }

    SESJA {
        int id PK
        datetime start_sesji
        datetime koniec_sesji
        int max_liczba_miejsc
    }

    REZERWACJA {
        int id PK
        int uzytkownik_id FK
        int sesja_id FK
        string status_platnosci
        decimal suma_calkowita
        datetime data_utworzenia
    }
    TYP_BILETU {
        int id PK
        string nazwa
        decimal cena_domyslna
    }

    BILET {
        int id PK
        int rezerwacja_id FK
        int typ_biletu_id FK
    }

    TYP_SPRZETU {
        int id PK
        string nazwa 
        int rozmiar 
        decimal cena_wypozyczenia
    }

    WYPOZYCZENIE {
        int id PK
        int bilet_id FK
        int typ_sprzetu_id FK
        int ilosc 
        datetime data_wypozyczenia
        datetime data_zwrotu
    }
