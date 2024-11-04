// Function to parse the serialized mec_fields data and extract the keys and values
function parse_mec_fields($data) {
    $parsed_data = [];

    // Unserialize the data
    $unserialized_data = unserialize($data);

    if (is_array($unserialized_data)) {
        foreach ($unserialized_data as $key => $value) {
            $parsed_data['mec_fields_' . $key] = $value;
        }
    } else {
        // If the data is not serialized, assume it's a single value
        $parsed_data['mec_fields'] = $data;
    }

    return $parsed_data;
}
