import 'dart:async';

import 'package:collection/collection.dart';

import '/backend/schema/util/firestore_util.dart';
import '/backend/schema/util/schema_util.dart';

import 'index.dart';
import '/flutter_flow/flutter_flow_util.dart';

class PlacesRecord extends FirestoreRecord {
  PlacesRecord._(
    DocumentReference reference,
    Map<String, dynamic> data,
  ) : super(reference, data) {
    _initializeFields();
  }

  // "name" field.
  String? _name;
  String get name => _name ?? '';
  bool hasName() => _name != null;

  // "location" field.
  String? _location;
  String get location => _location ?? '';
  bool hasLocation() => _location != null;

  // "price" field.
  int? _price;
  int get price => _price ?? 0;
  bool hasPrice() => _price != null;

  // "image" field.
  String? _image;
  String get image => _image ?? '';
  bool hasImage() => _image != null;

  // "amenities" field.
  List<String>? _amenities;
  List<String> get amenities => _amenities ?? const [];
  bool hasAmenities() => _amenities != null;

  // "ownerRef" field.
  DocumentReference? _ownerRef;
  DocumentReference? get ownerRef => _ownerRef;
  bool hasOwnerRef() => _ownerRef != null;

  // "desc" field.
  String? _desc;
  String get desc => _desc ?? '';
  bool hasDesc() => _desc != null;

  // "max_people" field.
  int? _maxPeople;
  int get maxPeople => _maxPeople ?? 0;
  bool hasMaxPeople() => _maxPeople != null;

  // "placeRef" field.
  String? _placeRef;
  String get placeRef => _placeRef ?? '';
  bool hasPlaceRef() => _placeRef != null;

  // "coords" field.
  LatLng? _coords;
  LatLng? get coords => _coords;
  bool hasCoords() => _coords != null;

  void _initializeFields() {
    _name = snapshotData['name'] as String?;
    _location = snapshotData['location'] as String?;
    _price = castToType<int>(snapshotData['price']);
    _image = snapshotData['image'] as String?;
    _amenities = getDataList(snapshotData['amenities']);
    _ownerRef = snapshotData['ownerRef'] as DocumentReference?;
    _desc = snapshotData['desc'] as String?;
    _maxPeople = castToType<int>(snapshotData['max_people']);
    _placeRef = snapshotData['placeRef'] as String?;
    _coords = snapshotData['coords'] as LatLng?;
  }

  static CollectionReference get collection =>
      FirebaseFirestore.instance.collection('places');

  static Stream<PlacesRecord> getDocument(DocumentReference ref) =>
      ref.snapshots().map((s) => PlacesRecord.fromSnapshot(s));

  static Future<PlacesRecord> getDocumentOnce(DocumentReference ref) =>
      ref.get().then((s) => PlacesRecord.fromSnapshot(s));

  static PlacesRecord fromSnapshot(DocumentSnapshot snapshot) => PlacesRecord._(
        snapshot.reference,
        mapFromFirestore(snapshot.data() as Map<String, dynamic>),
      );

  static PlacesRecord getDocumentFromData(
    Map<String, dynamic> data,
    DocumentReference reference,
  ) =>
      PlacesRecord._(reference, mapFromFirestore(data));

  @override
  String toString() =>
      'PlacesRecord(reference: ${reference.path}, data: $snapshotData)';

  @override
  int get hashCode => reference.path.hashCode;

  @override
  bool operator ==(other) =>
      other is PlacesRecord &&
      reference.path.hashCode == other.reference.path.hashCode;
}

Map<String, dynamic> createPlacesRecordData({
  String? name,
  String? location,
  int? price,
  String? image,
  DocumentReference? ownerRef,
  String? desc,
  int? maxPeople,
  String? placeRef,
  LatLng? coords,
}) {
  final firestoreData = mapToFirestore(
    <String, dynamic>{
      'name': name,
      'location': location,
      'price': price,
      'image': image,
      'ownerRef': ownerRef,
      'desc': desc,
      'max_people': maxPeople,
      'placeRef': placeRef,
      'coords': coords,
    }.withoutNulls,
  );

  return firestoreData;
}

class PlacesRecordDocumentEquality implements Equality<PlacesRecord> {
  const PlacesRecordDocumentEquality();

  @override
  bool equals(PlacesRecord? e1, PlacesRecord? e2) {
    const listEquality = ListEquality();
    return e1?.name == e2?.name &&
        e1?.location == e2?.location &&
        e1?.price == e2?.price &&
        e1?.image == e2?.image &&
        listEquality.equals(e1?.amenities, e2?.amenities) &&
        e1?.ownerRef == e2?.ownerRef &&
        e1?.desc == e2?.desc &&
        e1?.maxPeople == e2?.maxPeople &&
        e1?.placeRef == e2?.placeRef &&
        e1?.coords == e2?.coords;
  }

  @override
  int hash(PlacesRecord? e) => const ListEquality().hash([
        e?.name,
        e?.location,
        e?.price,
        e?.image,
        e?.amenities,
        e?.ownerRef,
        e?.desc,
        e?.maxPeople,
        e?.placeRef,
        e?.coords
      ]);

  @override
  bool isValidKey(Object? o) => o is PlacesRecord;
}
