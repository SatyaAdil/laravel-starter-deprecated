<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <h3>Ini adalah halaman Homepage</h3>
    
    <div class="d-flex flex-wrap gap-4">
        <x-card title="Bootstrap" 
        content="Bootstrap adalah framework CSS populer yang memudahkan pengembangan web dengan desain responsif dan komponen siap pakai."
        image="https://aohige-life.com/wp-content/uploads/2023/04/bootstrap4.png"
        link="https://getbootstrap.com/" />

         <x-card title="HTML" 
        content="HTML (HyperText Markup Language) adalah bahasa dasar dalam pembuatan struktur halaman web."
        image="https://th.bing.com/th/id/R.e1d424c4b9be7009dd57ef4e7d58e343?rik=EZ8NO5x85jZ0Vg&riu=http%3a%2f%2f1.bp.blogspot.com%2f-NGHwBncyA68%2fUiMm_8b2ZUI%2fAAAAAAAAAnA%2f17OGXCKI4zE%2fs1600%2fLogo%2bHTML5.JPG&ehk=rnVe3RUksYQ4LMnsZ6Xxyf3F5lkj3Br1Eu6vOVCkYh0%3d&risl=&pid=ImgRaw&r=0"
        link="https://developer.mozilla.org/en-US/docs/Web/HTML" />

        <x-card title="Java" 
        content="Java adalah bahasa pemrograman yang banyak digunakan untuk pengembangan aplikasi web, desktop, dan mobile."
        image="https://th.bing.com/th/id/OIP.X8Po6UQLjtfpG7-_0SUISQHaFj?rs=1&pid=ImgDetMain"
        link="https://www.java.com/" />

         <x-card title="CSS" 
        content="CSS (Cascading Style Sheets) digunakan untuk mengatur tampilan dan desain halaman web."
        image="https://fr.w3docs.com/uploads/media/book_gallery/0001/02/c8d75681dcd87da6f7d8ebfa0cdb40cbb403bed8.png"
        link="https://developer.mozilla.org/en-US/docs/Web/CSS" />
    </div>

    <x-alert type="" message="" />
</x-layout>




