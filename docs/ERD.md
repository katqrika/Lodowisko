```mermaid
erDiagram
    UZYTKOWNIK ||--o{ REZERWACJA : "robi"
    UZYTKOWNIK {
        int id
        string login
        string email
        string haslo
        string numer_telefonu
    }

    SESJA ||--o{ BILET : "dotyczy"
    SESJA {
        int id
        datetime start
        datetime koniec
        int limity
    }

    REZERWACJA ||--o{ BILET : "zawiera"
    REZERWACJA {
        int id
        int uzytkownik_id
        string status
        decimal suma
    }

    BILET ||--o{ WYPOZYCZENIE : "ma"
    BILET {
        int id
        int rezerwacja_id
        int sesja_id
        string typ
    }

    SPRZET ||--o{ WYPOZYCZENIE : "jest w"
    SPRZET {
        int id
        string nazwa
        string rozmiar
    }

    WYPOZYCZENIE {
        int id
        int bilet_id
        int sprzet_id
        decimal cena
    }
