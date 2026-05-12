```mermaid
erDiagram
    UZYTKOWNIK ||--o{ REZERWACJA : "sklada"
    UZYTKOWNIK {
        int id PK
        string imie
        string nazwisko
        string email UK
        string numer_telefonu
        string haslo_hash
        datetime utworzono
    }

    REZERWACJA ||--o{ REZERWACJA_SESJA : "obejmuje"
    REZERWACJA ||--o{ BILET : "zawiera"
    REZERWACJA {
        int id PK
        int uzytkownik_id FK
        string status "nowa/oplacona/anulowana"
        decimal suma_do_zaplaty
        datetime utworzono
    }

    SESJA ||--o{ REZERWACJA_SESJA : "dotyczy"
    SESJA {
        int id PK
        time godzina_rozpoczecia
        time godzina_zakonczenia
        int limit_osob
        int dzien_tygodnia "0=pon...6=nd"
    }

    REZERWACJA_SESJA {
        int id PK
        int rezerwacja_id FK
        int sesja_id FK
        date data_sesji
        decimal cena_biletu_w_dniu
    }

    BILET ||--o{ WYPOZYCZENIE : "moze_miec"
    BILET {
        int id PK
        int rezerwacja_id FK
        int rezerwacja_sesja_id FK
        string typ "normalny/ulgowy"
        decimal cena_koncowa
    }

    WYPOZYCZENIE ||--o{ WYPOZYCZENIE_SPRZET : "zawiera"
    WYPOZYCZENIE {
        int id PK
        int bilet_id FK
        datetime wydano
        datetime zwrocono
    }

    WYPOZYCZENIE_SPRZET {
        int id PK
        int wypozyczenie_id FK
        int sprzet_id FK
        decimal cena_w_dniu_zakupu
    }

    SPRZET ||--o{ WYPOZYCZENIE_SPRZET : "jest_wypozyczany"
    SPRZET ||--o{ HISTORIA_CEN_SPRZETU : "ma_historie_cen"
    SPRZET {
        int id PK
        int typ_sprzetu_id FK
        string numer_seryjny UK
        string stan "dostepny/wypozyczony/serwis"
        datetime dodano
    }

    TYP_SPRZETU ||--o{ SPRZET : "klasyfikuje"
    TYP_SPRZETU {
        int id PK
        int kategoria_id FK
        string nazwa "Lyzwy hokejowe"
        string rozmiar
        decimal cena_aktualna
    }

    KATEGORIA_SPRZETU ||--o{ TYP_SPRZETU : "grupuje"
    KATEGORIA_SPRZETU {
        int id PK
        int kategoria_nadrzedna_id FK
        string nazwa "Lyzwy / Kaski"
        string opis
    }

    HISTORIA_CEN_SPRZETU {
        int id PK
        int sprzet_id FK
        decimal cena
        datetime obowiazuje_od
        datetime obowiazuje_do
    }