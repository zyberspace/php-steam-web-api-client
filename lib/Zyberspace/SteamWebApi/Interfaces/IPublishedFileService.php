<?php

namespace Zyberspace\SteamWebApi\Interfaces;

use Zyberspace\SteamWebApi\AbstractInterface;
class IPublishedFileService extends AbstractInterface
{
    /**
     * /IPublishedFileService/QueryFiles/v1/
     *
     * @param uint32 $query_type enumeration EPublishedFileQueryType in clientenums.h
     * @param uint32 $page Current page
     * @param uint32 $numperpage (Optional) The number of results, per page to return.
     * @param uint32 $creator_appid App that created the files
     * @param uint32 $appid App that consumes the files
     * @param string $requiredtags Tags to match on. See match_all_tags parameter below
     * @param string $excludedtags (Optional) Tags that must NOT be present on a published file to satisfy the query.
     * @param bool $match_all_tags If true, then items must have all the tags specified, otherwise they must have at least one of the tags.
     * @param string $required_flags Required flags that must be set on any returned items
     * @param string $omitted_flags Flags that must not be set on any returned items
     * @param string $search_text Text to match in the item's title or description
     * @param uint32 $filetype EPublishedFileInfoMatchingFileType
     * @param uint64 $child_publishedfileid Find all items that reference the given item.
     * @param uint32 $days If query_type is k_PublishedFileQueryType_RankedByTrend, then this is the number of days to get votes for [1,7].
     * @param bool $include_recent_votes_only If query_type is k_PublishedFileQueryType_RankedByTrend, then limit result set just to items that have votes within the day range given
     * @param uint32 $cache_max_age_seconds Allow stale data to be returned for the specified number of seconds.
     * @param int32 $language Language to search in and also what gets returned. Defaults to English.
     * @param {message} $required_kv_tags Required key-value tags to match on.
     * @param bool $totalonly (Optional) If true, only return the total number of files that satisfy this query.
     * @param bool $ids_only (Optional) If true, only return the published file ids of files that satisfy this query.
     * @param bool $return_vote_data Return vote data
     * @param bool $return_tags Return tags in the file details
     * @param bool $return_kv_tags Return key-value tags in the file details
     * @param bool $return_previews Return preview image and video details in the file details
     * @param bool $return_children Return child item ids in the file details
     * @param bool $return_short_description Populate the short_description field instead of file_description
     * @param bool $return_for_sale_data Return pricing information, if applicable
     * @param bool $return_metadata Populate the metadata
     */
    public function QueryFilesV1($query_type, $page, $numperpage = null, $creator_appid, $appid, $requiredtags, $excludedtags, $match_all_tags = null, $required_flags, $omitted_flags, $search_text, $filetype, $child_publishedfileid, $days, $include_recent_votes_only, $cache_max_age_seconds = null, $language = null, $required_kv_tags, $totalonly, $ids_only, $return_vote_data, $return_tags, $return_kv_tags, $return_previews, $return_children, $return_short_description, $return_for_sale_data, $return_metadata = null)
    {
        return $this->_call(__METHOD__, 'GET', array('query_type' => $query_type, 'page' => $page, 'numperpage' => $numperpage, 'creator_appid' => $creator_appid, 'appid' => $appid, 'requiredtags' => $requiredtags, 'excludedtags' => $excludedtags, 'match_all_tags' => $match_all_tags, 'required_flags' => $required_flags, 'omitted_flags' => $omitted_flags, 'search_text' => $search_text, 'filetype' => $filetype, 'child_publishedfileid' => $child_publishedfileid, 'days' => $days, 'include_recent_votes_only' => $include_recent_votes_only, 'cache_max_age_seconds' => $cache_max_age_seconds, 'language' => $language, 'required_kv_tags' => $required_kv_tags, 'totalonly' => $totalonly, 'ids_only' => $ids_only, 'return_vote_data' => $return_vote_data, 'return_tags' => $return_tags, 'return_kv_tags' => $return_kv_tags, 'return_previews' => $return_previews, 'return_children' => $return_children, 'return_short_description' => $return_short_description, 'return_for_sale_data' => $return_for_sale_data, 'return_metadata' => $return_metadata));
    }
}
