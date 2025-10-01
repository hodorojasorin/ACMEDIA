<?php
// Proiect: Aplicație colecții multimedia
// Autor: Arseni Sorin Hodoroja
// Scop: gestionare filme, muzică, imagini, playlisturi

// =======================
// STRUCTURĂ / ROUTING
// =======================
// TODO: creează un router simplu: /home, /library, /play, /api
// TODO: păstrează logica biznis în /app, template-urile în /views

// =======================
// AUTENTIFICARE
// =======================
// TODO: implementare login + register minimal
// Sugestie: folosește sesiuni PHP pentru a stoca user_id
// TODO: adaugă validare pe server pentru datele din formular

// =======================
// MODEL DATE
// =======================
// Format intern: fiecare item = [id, titlu, tip, gen, an, metadate]
// TODO: suport tag-uri multiple pentru căutare avansată

// =======================
// INTERFAȚĂ & UX
// =======================
// TODO: pagină principală cu carduri pentru item-uri
// TODO: filtre laterale: tip, gen, an, rating
// Sfat UI: afișează buton Play direct pe card pentru acces rapid

// =======================
// PLAYER INTEGRAT
// =======================
// TODO: player JS cu play/pause, seek, volume, fullscreen
// Sugestie: salvează poziția curentă în localStorage pentru "resume"

// =======================
// CĂUTARE AVANSATĂ
// =======================
// TODO: implementare autocomplete cu AJAX
// TODO: suport search by tag, gen, text full (titlu + descriere)

// =======================
// INTEGRARE API EXTERNĂ
// =======================
// Exemplu TMDB: caută filme, importă poster, descriere și an
// TODO: crează script care sincronizează metadatele periodic
// Exemplu Spotify: autentificare OAuth pentru a importa playlisturi

// =======================
// EXPORT / IMPORT
// =======================
// TODO: export colecții în JSON și XML
// TODO: import JSON valid direct în baza locală

// =======================
// PLAYLISTURI PERSONALIZATE
// =======================
// TODO: creare, redenumire, reordonare drag-n-drop
// Sfat: salvează playlist-urile ca array de id-uri, exportabil

// =======================
// PERFORMANȚĂ & SECURITY
// =======================
// TODO: folosește paginare sau lazy-load pentru colecții mari
// TODO: scăpa de SQL injection, folosește PDO cu prepared statements
// TODO: escape output pentru a preveni XSS

// =======================
// MEDIA UPLOAD
// =======================
// TODO: validare tip fișier și mărime maximă la upload
// Sugestie: creează folder /uploads/{user_id} și redenumește fișierele

// =======================
// TESTARE
// =======================
// TODO: scrie 10 teste manuale pentru fluxuri cheie: upload, play, export
// TODO: testează API extern cu date mock

// =======================
// DOCUMENTAȚIE
// =======================
// README: cum rulezi proiectul local, variabile de mediu, endpoint-uri
// TODO: adaugă un fișier example.env cu cheile necesare

// =======================
// IDEI „fain” suplimentare
// =======================
// - Recomandări automate: „dacă-ți plac X, s-ar putea să-ți placă Y”
// - Dark mode comutabil
// - Share link public pentru un playlist
// - Wall of favorites: afișează top 10 cele mai ascultate/vizionate

// =======================
// EXEMPLU SCURT: integrare TMDB (pseudocod)
// =======================
// function fetchMovie($tmdbId) {
//   // 1. cheamă API TMDB cu cheia ta
//   // 2. salvează poster, titlu, descriere în baza locală
//   // 3. map-ează genurile la genurile interne
// }
?>