function unescapeJson(jsonString) {
    return jsonString.replace(/&quot;/g, '\"')
}