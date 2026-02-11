<?php
class Landing {
    public static function getBySlug($slug) {
        $db = Database::getConnection();
        $stmt = $db->prepare("SELECT * FROM landings WHERE slug = ? LIMIT 1");
        $stmt->execute(array($slug));
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
