DROP TRIGGER if EXISTS update_interaction_after_insert;

delimiter //
CREATE TRIGGER update_interaction_after_insert
AFTER INSERT ON user_boardgame_interaction
FOR EACH ROW
BEGIN
    IF NEW.liked = TRUE THEN
        UPDATE boardgames 
        SET n_likes = n_likes + 1 
        WHERE id = NEW.boardgame_id;
    END IF;

	IF NEW.rating IS NOT NULL THEN
        UPDATE boardgames 
        SET average_rating = ROUND(((average_rating * num_ratings) + NEW.rating) / (num_ratings + 1), 1)
        WHERE id = NEW.boardgame_id;

        UPDATE boardgames 
        SET num_ratings = num_ratings + 1 
        WHERE id = NEW.boardgame_id;

		UPDATE boardgames 
        SET bgg_ELO = average_rating * num_ratings
        WHERE id = NEW.boardgame_id;
    END IF;

    IF NEW.owns = TRUE THEN
        UPDATE boardgames
        SET owners = owners + 1 
        WHERE id = NEW.boardgame_id;
    END IF;
END //
delimiter ;

DROP TRIGGER if EXISTS update_interaction_after_update;

delimiter //
CREATE TRIGGER update_interaction_after_update
AFTER UPDATE ON user_boardgame_interaction
FOR EACH ROW
BEGIN
    IF OLD.liked != NEW.liked THEN
        IF NEW.liked = TRUE THEN
            UPDATE boardgames 
            SET n_likes = n_likes + 1 
            WHERE id = NEW.boardgame_id;
        ELSE
            UPDATE boardgames 
            SET n_likes = n_likes - 1 
            WHERE id = NEW.boardgame_id;
        END IF;
	END IF;

	IF OLD.rating != NEW.rating THEN
		
		IF OLD.rating IS NULL THEN
			UPDATE boardgames 
			SET average_rating = ROUND(((average_rating * num_ratings) + NEW.rating) / (num_ratings + 1),1)
			WHERE id = NEW.boardgame_id;

			UPDATE boardgames 
			SET num_ratings = num_ratings + 1 
			WHERE id = NEW.boardgame_id;

			UPDATE boardgames 
			SET bgg_ELO = average_rating * num_ratings
			WHERE id = NEW.boardgame_id;
		ELSE

			UPDATE boardgames 
			SET average_rating = ROUND(((average_rating * num_ratings) - OLD.rating + NEW.rating) / num_ratings,1)
			WHERE id = NEW.boardgame_id;

			UPDATE boardgames 
			SET bgg_ELO = average_rating * num_ratings
			WHERE id = NEW.boardgame_id;
    	END IF;
    END IF;

    IF OLD.owns != NEW.owns THEN
        
        IF NEW.owns = TRUE THEN
            UPDATE boardgames 
            SET owners = owners + 1 
            WHERE id = NEW.boardgame_id;
        ELSE
            UPDATE boardgames 
            SET owners = owners - 1 
            WHERE id = NEW.boardgame_id;
        END IF;

    END IF;
END //
delimiter ;

DROP TRIGGER if EXISTS update_interaction_after_delete;

delimiter //
CREATE TRIGGER update_interaction_after_delete
AFTER DELETE ON user_boardgame_interaction
FOR EACH ROW
BEGIN
    IF OLD.liked = TRUE THEN
        UPDATE boardgames 
        SET n_likes = n_likes - 1 
        WHERE id = OLD.boardgame_id;
    END IF;

	IF OLD.rating IS NOT NULL THEN
		UPDATE boardgames 
		SET average_rating = ROUND(((average_rating * num_ratings) - OLD.rating) / (num_ratings - 1),1)
		WHERE id = OLD.boardgame_id;

		UPDATE boardgames 
		SET num_ratings = num_ratings - 1 
		WHERE id = OLD.boardgame_id;

		UPDATE boardgames 
		SET bgg_ELO = average_rating * num_ratings
		WHERE id = OLD.boardgame_id;
	END IF;
    
	IF OLD.owns = TRUE THEN
        UPDATE boardgames 
		SET owners = owners - 1
		WHERE id = OLD.boardgame_id;
    END IF;
END //
delimiter ;


DROP TRIGGER IF EXISTS update_comments_after_insert;

delimiter //
CREATE TRIGGER update_comments_after_insert
AFTER INSERT ON comments
FOR EACH ROW
BEGIN
    UPDATE boardgames
    JOIN media ON media.boardgame_id = boardgames.id
    SET boardgames.num_comments = boardgames.num_comments + 1
    WHERE media.id = NEW.media_id;

    UPDATE media
    SET media.n_comments = media.n_comments + 1
    WHERE media.id = NEW.media_id;
END //
delimiter ;

DROP TRIGGER IF EXISTS update_comments_after_delete;

delimiter //
CREATE TRIGGER update_comments_after_delete
AFTER DELETE ON comments
FOR EACH ROW
BEGIN
    UPDATE boardgames
    JOIN media ON media.boardgame_id = boardgames.id
    SET boardgames.num_comments = boardgames.num_comments - 1
    WHERE media.id = OLD.media_id;

    UPDATE media
    SET media.n_comments = media.n_comments - 1
    WHERE media.id = OLD.media_id;
END //
delimiter ;

DROP TRIGGER IF EXISTS update_likes_after_insert;

delimiter //
CREATE TRIGGER update_likes_after_insert
AFTER INSERT ON likes
FOR EACH ROW
BEGIN
    UPDATE media
    SET media.n_likes = media.n_likes + 1
    WHERE media.id = NEW.media_id;
END //
delimiter ;

DROP TRIGGER IF EXISTS update_likes_after_delete;

delimiter //
CREATE TRIGGER update_likes_after_delete
AFTER DELETE ON likes
FOR EACH ROW
BEGIN
    UPDATE media
    SET media.n_likes = media.n_likes - 1
    WHERE media.id = OLD.media_id;
END //
delimiter ;

