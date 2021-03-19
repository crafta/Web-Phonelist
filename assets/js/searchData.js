/***
 * Searches the telephonelist for
 * name, phonenumber, email, funktion, abteilung, raum
 */
function search(query) {
    const queryLower = query.toLowerCase();

    window.filteredUserData =
        window.userData.filter(user =>
            user.name.toLowerCase().includes(queryLower) ||
            user.vorname.toLowerCase().includes(queryLower) ||
            user.telefon.toLowerCase().includes(queryLower) ||
            user.email.toLowerCase().includes(queryLower) ||
            user.funktion.toLowerCase().includes(queryLower) ||
            user.gruppetext.toLowerCase().includes(queryLower) ||
            user.raum.toLowerCase().includes(queryLower));

    renderViewMode();
    countUserData();
}
