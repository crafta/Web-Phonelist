/***
 * Toggles the view mode based on the user selection
 * Valid view modes: Grid, List
 */
function toggleViewMode(mode) {
	switch(mode) {
		case 'grid':
			renderUserGrid();
			break;
		case 'list':
			renderUserList();
			break;
		default:
			renderUserGrid();
	}
}