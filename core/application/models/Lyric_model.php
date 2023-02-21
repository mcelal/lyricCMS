<?php 

class Lyric_model extends MY_Model {

    private $table = 'lyrics';


    // SELECT * FROM lyrics
    // LEFT JOIN artists ON artists.id = lyrics.artist_id
    // WHERE lyrics.slug = 'tabanca'
    // AND artists.slug = 'cengiz-kurtoglu'

    /**
     * @param $artist
     * @param $slug
     * @return mixed
     */
    public function getLyric($artist, $slug)
    {
        $select = [
            $this->table . '.id',
            $this->table . '.title',
            $this->table . '.slug',
            $this->table . '.lyric',
            $this->table . '.artist_id',
            $this->table . '.created_at',
            'artists.slug as artist_slug',
            'artists.name as artist_name'
        ];

        return $this->db->select($select)
                 ->join('artists', 'artists.id = lyrics.artist_id')
                 ->where('artists.slug', $artist)
                 ->where('lyrics.slug', $slug)
                 ->get($this->table)->row();
    }

    public function findArtist($id = null, $limit = null, $segment = null)
    {
        $select = [
            'id', 'submitter_id', 'title', 'slug', 'views', 'year', 'artist_id'
        ];

        $this->db->select($select);
//        $this->db->limit($limit, $segment);
        $this->db->where('artist_id', $id);
        $this->db->order_by('title', 'ASC');
        $query = $this->db->get($this->table);

        // TODO: sayfalama için limit ayarları yapılacak
        return $query->result();
    }

    public function lastAdd($limit = 10)
    {
        $select = [
            $this->table . '.id',
            $this->table . '.title',
            $this->table . '.slug',
            $this->table . '.artist_id',
            $this->table . '.created_at',
            'artists.slug as artist_slug',
        ];

        $this->db->select($select);
        $this->db->limit($limit);
        $this->db->join('artists', 'artists.id = lyrics.artist_id');
        $this->db->order_by($this->table.'.created_at', 'DESC');


        $query = $this->db->get($this->table);

        return $query->result();
    }

    public function topView($limit = 10)
    {
        $select = [
            $this->table . '.id',
            $this->table . '.title',
            $this->table . '.slug',
            $this->table . '.artist_id',
            $this->table . '.views',
            'artists.slug as artist_slug',

        ];

        $this->db->select($select);
        $this->db->limit($limit);
        $this->db->join('artists', 'artists.id = lyrics.artist_id');
        $this->db->order_by('views', 'DESC');

        return $this->db->get($this->table)->result();
    }
}