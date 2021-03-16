/***
 * Keeps track of the userData and counts the results
 * userData can be manipulated by searching, filtering, sorting
 */

function countUserData() {
	const countUserDataEl = document.getElementById('countUserData');

	if(countUserDataEl) countUserDataEl.innerHTML = window.filteredUserData.length + ' Suchergebnisse';
}
