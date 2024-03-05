class Book {
    String title;
    String author;
    String isbn;

    public Book(String title, String author, String isbn) {
        this.title = title;
        this.author = author;
        this.isbn = isbn;
    }

    public void displayBookInfo() {
        System.out.println("Title: " + title + ", Author: " + author + ", ISBN: " + isbn);
    }
}

class Library {
    String libraryName;
    Book firstBook;
    Book secondBook;

    public Library(String libraryName) {
        this.libraryName = libraryName;
        this.firstBook = null;
        this.secondBook = null;
    }

    public void addBook(Book book) {
        if (firstBook == null) {
            firstBook = book;
        } else if (secondBook == null) {
            secondBook = book;
        } else {
            System.out.println("Library is full. Cannot add more books.");
        }
    }

    public void displayLibraryBooks() {
        System.out.println("Library Name: " + libraryName);
        if (firstBook != null) {
            firstBook.displayBookInfo();
        }
        if (secondBook != null) {
            secondBook.displayBookInfo();
        }
    }
}

public class Main {
    public static void main(String[] args) {
        Library myLibrary = new Library("My Library");

        Book book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", "978-3-16-148410-0");
        Book book2 = new Book("To Kill a Mockingbird", "Harper Lee", "978-0-06-112008-4");

        myLibrary.addBook(book1);
        myLibrary.addBook(book2);

        myLibrary.displayLibraryBooks();
    }
}

